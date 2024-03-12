<?php
/**
 * Файл с классом с вспом-ми методами
 *
 * PHP version 8
 *
 * @category Main
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */

namespace Whatis\OzonSeller;

use Whatis\OzonSeller\Attribute\Mapping;
use ReflectionClass;
use ReflectionMethod;

/**
 * Класс с вспомогательными методами
 *
 * PHP version 8
 *
 * @category Main
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */
class Utils
{
    /**
     * Разделить строку по CamelCase
     *
     * @param string $string Значение
     *
     * @return array
     */
    public static function splitCamelCase(string $string): array
    {
        $regexp = '/(?#! splitCamelCase)
            # Split camelCase "words".
            # Two global alternatives. Either g1of2:
              (?<=[a-z])      # Position is after a lowercase,
              (?=[A-Z])       # and before an uppercase letter.
            | (?<=[A-Z])      # Or g2of2; Position is after uppercase,
              (?=[A-Z][a-z])  # and before upper-then-lower case.
            /x';

        return preg_split($regexp, $string);
    }

    /**
     * Обработать путь до ресурса в более корректный
     *
     * @param string $path Путь до ресурса
     *
     * @return string
     */
    public static function preparePath(string $path): string
    {
        $path = substr($path, 0, 1) == '/'
              ? substr($path, 1) : $path;
        return preg_replace("/(\/)\\1+/", "$1", $path);
    }

    /**
     * Получить корректный методы сервиса
     * для mapping
     *
     * @param string|object $service Сервис
     *
     * @return array
     */
    public static function serviceMappingMethods(
        string|object $service
    ): array {

        return array_filter(
            (new ReflectionClass($service))->getMethods(),
            fn ($method) => $method->isPublic()
                && !in_array(
                    ($name = $method->getName()), [
                        'withFormatter',
                        'getFormatter',
                        'basePath',
                        'withRequestFactory',
                        'getRequestFactory',
                        'getPermissions',
                        'domain',
                        'request'
                    ]
                ) && substr($name, 0, 1) !== '_'
        );
    }

    /**
     * Получить корректный основной путь
     * до запроса, либо стандартное значение
     *
     * @param string $service Сервис
     * @param string $default Стандартное значение
     *
     * @return string
     */
    public static function serviceBasePath(
        string $service,
        string $default = 'unknown'
    ) {
        return method_exists($service, 'basePath')
            ? $service::basePath() : $default;
    }

    /**
     * Получить корректный путь до запроса
     * для mapping
     *
     * @param ReflectionMethod $method Метод
     *
     * @return string
     */
    public static function serviceMethodPath(ReflectionMethod $method): string
    {
        $map = array_reduce(
            $method->getAttributes(Mapping::class),function ($carry, $map) {
                return $carry ? $carry : $map->newInstance();
            }
        );

        if ($map) {
            $class = $method->getDeclaringClass()->newInstanceWithoutConstructor();
            preg_match('/:(?<name>\w+)/', $map->path, $matches);
            foreach ($matches as $match) {
                if (substr($match, 0, 1) === ':') {
                    continue;
                }

                $map->path = str_replace(
                    ":$match", $class->$match, $map->path
                );
            }

            return $map->path;
        }

        return '.../unknown';
    }
}
