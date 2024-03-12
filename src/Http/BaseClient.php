<?php
/**
 * Файл с абстрактным
 * классом клиента
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

/**
 * Абстрактный класс клиента
 * для wildberries api
 *
 * PHP version 8
 *
 * @category Client
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/WBApiSkeleton
 */
abstract class BaseClient implements IClient
{
    use TClient;
}
