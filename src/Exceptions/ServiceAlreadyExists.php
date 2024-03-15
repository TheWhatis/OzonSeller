<?php
/**
 * Файл с исключением, возникающим
 * когда сервис уже существует
 *
 * PHP version 8
 *
 * @category Exceptions
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */

namespace Whatis\OzonSeller\Exceptions;

use Exception;

/**
 * Исключение, возникающее когда
 * сервис уже существует
 *
 * PHP version 8
 *
 * @category Exceptions
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */
class ServiceAlreadyExists extends Exception
{
    // ...
}
