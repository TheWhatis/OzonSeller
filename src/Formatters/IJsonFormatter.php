<?php
/**
 * Файл с интерфейсом форматировщика
 * ответа и запроса, чтобы получить
 * определённый формат данных
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

use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Интерфейс форматировщика ответа и запроса
 * от api, чтобы получить определённый
 * формат данных
 *
 * PHP version 8
 *
 * @category Formatters
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */
interface IJsonFormatter
{
    /**
     * Установить контекст выполнения
     *
     * @param RequestInterface|ResponseInterface $context Контекст
     *
     * @return static
     */
    public function withContext(RequestInterface|ResponseInterface $context): static;

    /**
     * Закодировать переданный контент
     * в строку json или StreamInterface
     *
     * Необходим для создания запросов
     *
     * @param mixed $content Контент
     *
     * @return string|StreamInterface
     */
    public function encode(mixed $content): string|StreamInterface;

    /**
     * Декодировать строку json в
     * необходимый формат
     *
     * @param string $content Контент
     *
     * @return mixed
     */
    public function decode(string $content): mixed;
}
