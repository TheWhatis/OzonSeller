<?php
/**
 * Файл с исключением, возникающим
 * когда сервиса не существует
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
 * сервиса не существует
 *
 * PHP version 8
 *
 * @category Exceptions
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */
class ServiceNotFound extends Exception
{
    // ...
}
