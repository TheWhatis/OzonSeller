<?php
/**
 * Файл с интерфейсом сервиса
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
use Whatis\OzonSeller\Enums\HttpMethod;
use Whatis\OzonSeller\Permissions;
use Whatis\OzonSeller\Formatters\IJsonFormatter;
use Psr\Http\Message\RequestFactoryInterface;
use BadMethodCallException;

/**
 * Интерфейс сервиса
 *
 * PHP version 8
 *
 * @category Service
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */
interface IService
{
    /**
     * Иницилизация сервиса
     *
     * @param int    $clientId Идентификатор клиента
     * @param string $token    Токен ozon seller api
     */
    public function __construct(int $clientId, string $token);

    /**
     * Получить массив необходимых разрешений
     * для этого сервиса
     *
     * @return Permissions
     */
    // public static function getPermissions(): Permissions;

    /**
     * Установить форматировщик
     *
     * @param IJsonFormatter $formatter Форматировщик
     *
     * @return static
     */
    public function withFormatter(IJsonFormatter $formatter): static;

    /**
     * Получить форматировщик
     *
     * @return IJsonFormatter
     */
    public function getFormatter(): IJsonFormatter;

    /**
     * Установить фабрику запросов
     *
     * @param RequestFactoryInterface $factory Фабрика запросов
     *
     * @return static
     */
    public function withRequestFactory(RequestFactoryInterface $factory): static;

    /**
     * Получить фабрику запросов
     *
     * @return RequestFactoryInterface
     */
    public function getRequestFactory(): RequestFactoryInterface;

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
    ): mixed;
}
