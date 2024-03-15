<?php
/**
 * Файл с трейтом, реализующим
 * интерфейс `IService`
 *
 * PHP version 8
 *
 * @category Service
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */

namespace Whatis\OzonSeller\Service;

use Whatis\OzonSeller\Http\IClient;
use Whatis\OzonSeller\Http\Payload as ClientPayload;
use Whatis\OzonSeller\Enums\HttpMethod;

use InvalidArgumentException;
use BadMethodCallException;
use Throwable;

/**
 * Трейт с реализацией
 * интерфейса `IService`
 *
 * PHP version 8
 *
 * @category Service
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */
trait TService
{
    /**
     * Клиент
     *
     * @var IClient
     */
    public readonly IClient $client;

    /**
     * Иницилизация сервиса
     *
     * @param IClient $client Клиент
     */
    public function __construct(IClient $client)
    {
        $this->client = $client;
    }

    /**
     * Получить домен для обращения
     *
     * @return string
     */
    public static function domain(): string
    {
        return 'api-seller.ozon.ru';
    }

    /**
     * Получить базовый uri
     *
     * @return string
     */
    public static function basePath(): string
    {
        return '';
    }

    /**
     * Получить заголовки из Payload
     *
     * @param mixed $payload Полезная нагрузка
     *
     * @return array
     */
    protected function headers(mixed $payload): array
    {
        return is_a($payload, Payload::class)
            ? $payload->headers : [];
    }

    /**
     * Получить параметры из Payload
     *
     * @param mixed $payload Полезная нагрузка
     *
     * @return array
     */
    protected function params(mixed $payload)
    {
        return is_a($payload, Payload::class)
            ? $payload->params : [];
    }

    /**
     * Получить тело запроса из Payload
     *
     * @param mixed $payload Полезная нагрузка
     *
     * @return mixed
     */
    protected function body(mixed $payload): mixed
    {
        return is_a($payload, Payload::class)
            ? $payload->body : $payload;
    }

    /**
     * Воспроизвести запрос
     *
     * @param string|HttpMethod $method  Метод
     * @param string            $path    Путь до запроса
     * @param mixed             $payload Полезная нагрузка запроса
     *
     * @return mixed
     */
    public function request(
        string|HttpMethod $method,
        string $path,
        mixed $payload = null
    ): mixed {
        $response = $this->client->request(
            new ClientPayload(
                HttpMethod::makeFrom($method),
                static::domain(),
                static::basePath() . '/' . $path,
                $this->headers($payload),
                $this->params($payload),
                $this->body($payload)
            )
        );

        $content = $response->getBody()->getContents();
        if (in_array($response->getStatusCode(), [201, 204])) {
            if (trim($content) === '') {
                return true;
            }
        }

        return $this->client->getFormatter()
            ->withContext($response)
            ->decode($content);
    }
}
