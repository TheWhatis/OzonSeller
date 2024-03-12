<?php
/**
 * Файл с перечислением методов
 * для запроса Http(s)
 *
 * PHP version 8
 *
 * @category Enums
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */

namespace Whatis\OzonSeller\Enums;

use InvalidArgumentException;

/**
 * Класс перечисления методов
 * для запроса Http(s)
 *
 * PHP version 8
 *
 * @category Enums
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */
enum HttpMethod: string
{
    case GET    = 'GET';
    case POST   = 'POST';
    case PUT    = 'PUT';
    case DELETE = 'DELETE';
    case PATCH  = 'PATCH';

    /**
     * Создать значение из строки
     *
     * @param HttpMethod|string $method Метод
     *
     * @return HttpMethod
     */
    public static function makeFrom(HttpMethod|string $method): static
    {
        if (!is_string($method)) {
            return $method;
        }

        $method = strtoupper($method);
        if (is_null($enumMethod = self::tryFrom($method))) {
            throw new InvalidArgumentException(
                '\'' . $method . '\' is not valid method'
            );
        }

        return $enumMethod;
    }
}
