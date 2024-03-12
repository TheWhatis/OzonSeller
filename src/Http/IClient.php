<?php
/**
 * Файл с интерфейсом клиента
 * для wildberries api
 *
 * PHP version 8
 *
 * @category Client
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */

namespace Whatis\OzonSeller\Http;

use Whatis\OzonSeller\Formatters\IJsonFormatter;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\RequestFactoryInterface;

/**
 * Интерфейс клиента
 * для ozon seller api
 *
 * PHP version 8
 *
 * @category Client
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */
interface IClient
{
    /**
     * Иницилизация клиента
     *
     * @param int    $clientId Идентификатор клиента
     * @param string $token    Токен ozon seller api
     */
    public function __construct(int $clientId, string $token);

    /**
     * Получить идентификатор клиента
     *
     * @return int
     */
    public function getClientId(): int;

    /**
     * Получить токен
     *
     * @return string
     */
    public function getToken(): string;

    /**
     * Установить форматтер body
     *
     * @param IJsonFormatter $formatter Форматер
     *
     * @return static
     */
    public function withFormatter(IJsonFormatter $formatter): static;

    /**
     * Получить форматер
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
    public function withRequestFactory(
        RequestFactoryInterface $factory
    ): static;

    /**
     * Получить фабрику запросов
     *
     * @return RequestFactoryInterface
     */
    public function getRequestFactory(): RequestFactoryInterface;

    /**
     * Выполнить запрос к wb api
     *
     * @param Payload $payload Данные (полезная нагрузка)
     *
     * @return ResponseInterface
     */
    public function request(Payload $payload): ResponseInterface;
}
