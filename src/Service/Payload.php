<?php
/**
 * Файл с классом полезной нагрузки
 * для создания запросов из
 * сервиса `IService`
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

/**
 * Класс полезной нагрузки
 * для создания запросов из
 * сервиса `IService`
 *
 * PHP version 8
 *
 * @category Service
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */
class Payload
{
    /**
     * Тело запроса
     *
     * @var mixed
     */
    public mixed $body;

    /**
     * Параметры запроса
     *
     * @var array
     */
    public array $params;

    /**
     * Заголовки запроса
     *
     * @var array
     */
    public array $headers;

    /**
     * Создать полезную нагрузку
     *
     * @param mixed $body    Тело запроса
     * @param array $params  Параметры запроса
     * @param array $headers Заголвки запроса
     */
    public function __construct(
        mixed $body = null,
        array $params = [],
        array $headers = []
    ) {
        $this->body = $body;
        $this->params = $params;
        $this->headers = $headers;
    }

    /**
     * Создать полезную нагрузку
     *
     * @param ...$args Аргументы для __construct
     *
     * @return static
     */
    public static function make(...$args): static
    {
        return new static(...$args);
    }

    /**
     * Создать полезную нагрузку с телом
     *
     * @param mixed $body Тело
     *
     * @return static
     */
    public static function byBody(mixed $body): static
    {
        return new static($body);
    }

    /**
     * Создать полезную нагрузку с параметрами
     *
     * @param array $params Параметры
     *
     * @return static
     */
    public static function byParams(array $params): static
    {
        return new static(null, $params);
    }

    /**
     * Создать полезную нагрузку с заголовками
     *
     * @param array $headers Заголовки
     *
     * @return static
     */
    public static function byHeaders(array $headers): static
    {
        return new static(null, [], $headers);
    }

    /**
     * Установить тело запроса
     *
     * @param mixed $body Тело запроса
     *
     * @return static
     */
    public function withBody(mixed $body): static
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Установить параметры запроса
     *
     * @param array $params Параметры
     *
     * @return static
     */
    public function withParams(array $params): static
    {
        $this->params = $params;
        return $this;
    }

    /**
     * Установить заголовки запроса
     *
     * @param array $headers Заголовки
     *
     * @return static
     */
    public function withHeaders(array $headers): static
    {
        $this->headers = $headers;
        return $this;
    }
}
