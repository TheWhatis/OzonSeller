<?php
/**
 * Файл с исключением, возникающим
 * когда у токена недостаточно
 * прав для работы с сервисом
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
 * Исключение, возникающее
 * когда у токена недостаточно
 * прав для работы с сервисом
 *
 * PHP version 8
 *
 * @category Exceptions
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */
class PermissionsDoesNotExistsException extends Exception
{
    // ...
}
