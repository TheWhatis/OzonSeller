<?php
/**
 * Файл с классом полезной нагрузки
 * для создания запросов из
 * клиента `IClient`
 *
 * Имеет все необходимые данные
 * для запроса
 *
 * PHP version 8
 *
 * @category Http
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */

namespace Whatis\OzonSeller\Http;

use Whatis\OzonSeller\Enums\HttpMethod;
use Whatis\OzonSeller\Utils;

/**
 * Класс полезной нагрузки
 * для создания запросов из
 * клиента `IClient`
 *
 * Имеет все необходимые данные
 * для запроса
 *
 * PHP version 8
 *
 * @category Http
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */
class Payload
{
    /**
     * Метод
     *
     * @var HttpMethod
     */
    public readonly HttpMethod $method;

    /**
     * Домен
     *
     * @var string
     */
    public readonly string $domain;

    /**
     * Путь до ресурса
     *
     * @var string
     */
    public readonly string $path;

    /**
     * Заголовки для запроса
     *
     * @var array
     */
    public readonly array $headers;

    /**
     * Параметры
     *
     * @var array
     */
    public readonly array $params;

    /**
     * Тело запроса
     *
     * @var mixed
     */
    public readonly mixed $body;

    /**
     * Создание экземпляра полезной нагрузки
     *
     * @param HttpMethod $method  Метод
     * @param string     $domain  Домен
     * @param string     $path    Путь
     * @param array      $headers Заголовки
     * @param array      $params  Параметры
     * @param mixed      $body    Тело запроса
     */
    public function __construct(
        HttpMethod $method,
        string $domain,
        string $path,
        array $headers,
        array $params,
        mixed $body
    ) {
        $this->method = $method;
        $this->domain = $domain;
        $this->path = Utils::preparePath($path);
        $this->headers = $headers;
        $this->params = $params;
        $this->body = $body;
    }
}
