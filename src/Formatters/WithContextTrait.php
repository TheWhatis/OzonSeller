<?php
/**
 * Файл с трейтом, с реализованным
 * методом для установки контекста
 * выполнения форматировщика
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

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Трейт, с реализованным методом
 * для установки контекста
 * выполнения форматировщика
 *
 * PHP version 8
 *
 * @category Formatters
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */
trait WithContextTrait
{
    /**
     * Контекст
     *
     * @var RequestInterface|ResponseInterface|null
     */
    public RequestInterface|ResponseInterface|null $context = null;

    /**
     * Установить контекст выполнения
     *
     * @param RequestInterface|ResponseInterface $context Контекст
     *
     * @return static
     */
    public function withContext(
        RequestInterface|ResponseInterface $context
    ): static {
        $this->context = $context;
        return $this;
    }
}
