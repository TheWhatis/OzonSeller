<?php
/**
 * Файл с абстракным классом форматировщика json
 * для ответов и запросов от api, с
 * реализацией основных методов
 *
 * PHP version 8
 *
 * @category Formatters
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */

namespace Whatis\OzonSeller\Formatters;

/**
 * Абстракный класс форматировщика json
 * для ответов и запросов от api, с
 * реализацией основных методов
 *
 * PHP version 8
 *
 * @category Formatters
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */
abstract class BaseFormatter implements IJsonFormatter
{
    use MultiEncodeTrait;
    use WithContextTrait;
}
