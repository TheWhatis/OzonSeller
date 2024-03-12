<?php
/**
 * Файл с трейтом с реализованным
 * методом для закодирования переданных
 * данных в string json или StreamInterface
 *
 * PHP version 8
 *
 * @category Formatters
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */

namespace Whatis\OzonSeller\Formatters;

use Psr\Http\Message\StreamInterface;
use GuzzleHttp\Psr7\Utils;

use InvalidArgumentException;
use Throwable;
use stdClass;

/**
 * Трейт с реализованным методом
 * для закодирования переданных данных
 * в string json или StreamInterface
 *
 * PHP version 8
 *
 * @category Formatters
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */
trait MultiEncodeTrait
{
    /**
     * Закодировать переданный контент
     * в строку json или StreamInterface
     *
     * @param mixed $content Контент
     *
     * @return StreamInterface
     * @throw  InvalidArgumentException
     */
    public function encode(mixed $content): StreamInterface
    {
        if ($this->contentIsEmpty($content)) {
            return Utils::streamFor(null);
        }

        if (is_string($content)) {
            $this->validateJsonString($content);
            return Utils::streamFor($content);
        }

        if ($this->canToArray($content)) {
            $content = $this->toArray($content);
        }

        if (is_a($content, StreamInterface::class)) {
            return $content;
        }

        try {
            return Utils::streamFor(
                json_encode($content, JSON_THROW_ON_ERROR)
            );
        } catch (Throwable) {
            $type = is_object($content)
                  ? $content::class
                  : gettype($content);

            throw new InvalidArgumentException(
                'Cant convert of \''
                    . $type . '\' type to json string'
            );
        }
    }

    /**
     * Конвертировать контент в массив
     *
     * @param array|stdClass $content Контент
     *
     * @return array
     */
    public function toArray(array|stdClass $content): array
    {
        $array = [];
        foreach ($content as $key => $value) {
            if (is_array($value) || is_a($content, stdClass::class)) {
                $array[$key] = $this->toArray($value);
                continue;
            }
            $array[$key] = $value;
        }

        return $array;
    }

    /**
     * Проверить что объект может быть
     * сконвертирован в массив
     *
     * @param mixed $content Контент
     *
     * @return bool
     */
    public function canToArray(mixed $content): bool
    {
        return is_array($content)
            || is_a($content, stdClass::class);
    }

    /**
     * Проверить что строка имеет валидный json
     *
     * @param string $content Строка в json
     *
     * @return bool
     */
    public function isValidJson(string $content): bool
    {
        try {
            $decodedContent = json_decode(
                $content, true, 512, JSON_THROW_ON_ERROR
            );
        } catch (Throwable) {
            return false;
        }

        if (!is_array($decodedContent)) {
            return false;
        }

        return true;
    }

    /**
     * Валидировать строку json
     *
     * @param string $content Контент в json
     *
     * @return bool
     */
    protected function validateJsonString(string $content): void
    {
        if (!$this->isValidJson($content)) {
            $this->throwInvalidJson($content);
        }
    }

    /**
     * Вывести ошибку, если передан неверный
     * формат json
     *
     * @param string $content Контент в неверном json
     *
     * @return never
     */
    public function throwInvalidJson(string $content): never
    {
        throw new InvalidArgumentException(
            'Passed content is not valid json. Content:'
                . $content . PHP_EOL
        );
    }

    /**
     * Проверить что контент пустой
     *
     * @param mixed $content Контент
     *
     * @return bool
     */
    protected function contentIsEmpty(mixed $content): bool
    {
        if (!$content) {
            return true;
        }

        return is_object($content) && (array) $content === [];
    }
}
