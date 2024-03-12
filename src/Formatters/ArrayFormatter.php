<?php
/**
 * Файл с форматировщиком тела
 * ответа, чтобы получить массив
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

use Throwable;

/**
 * Форматировщик тела ответа,
 * чтобы получить массив
 *
 * PHP version 8
 *
 * @category Formatters
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */
class ArrayFormatter extends BaseFormatter
{
    /**
     * Декодировать строку json в
     * необходимый формат
     *
     * @param string $content Контент
     *
     * @return mixed
     */
    public function decode(string $content): array
    {
        if ($content === '') {
            return new stdClass;
        }

        try {
            $decoded = json_decode(
                $content, true, 512, JSON_THROW_ON_ERROR
            );
        } catch (Throwable) {
            $this->throwInvalidJson($content);
        }

        if (!is_array($decoded)) {
            $this->throwInvalidJson($content);
        }

        return $decoded;
    }
}
