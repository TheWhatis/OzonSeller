<?php
/**
 * Файл с абстрактным классом
 * сервиса для wildberries api
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
 * Абстрактный класс сервиса
 * для wildberries api
 *
 * PHP version 8
 *
 * @category Service
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */
abstract class BaseService implements IService
{
    use TService;
}
