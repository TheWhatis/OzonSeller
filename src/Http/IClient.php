<?php
/**
 * Файл с интерфейсом клиента
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
     * @param int                      $clientId  Идентификатор клиента
     * @param string                   $token     Токен ozon seller api
     * @param ?IJsomFormatter          $formatter Форматировщик данных
     * @param ?RequestFactoryInterface $factory   Фабрика запросов
     */
    public function __construct(
        int $clientId,
        string $token,
        ?IJsonFormatter $formatter = null,
        ?RequestFactoryInterface $factory = null
    );

    /**
     * Получить форматер
     *
     * @return IJsonFormatter
     */
    public function getFormatter(): IJsonFormatter;

    /**
     * Выполнить запрос к wb api
     *
     * @param Payload $payload Данные (полезная нагрузка)
     *
     * @return ResponseInterface
     */
    public function request(Payload $payload): ResponseInterface;
}
