<?php
/**
 * Файл с интерфейсом для реализации
 * пакетов сервисов
 *
 * PHP version 8
 *
 * @category Package
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */

namespace Whatis\OzonSeller\Package;

use Iterator;
use Closure;

/**
 * Интерфейс для реализации
 * пакетов сервисов
 *
 * PHP version 8
 *
 * @category Package
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */
interface IPackage extends Iterator
{
    /**
     * Получить генератор сервиса
     *
     * @return Closure|string|null
     */
    public function current(): Closure|string|null;

    /**
     * Получить название сервиса
     *
     * @return ?string
     */
    public function key(): ?string;

    /**
     * Перейти к след-му пакету
     *
     * @return void
     */
    public function next(): void;

    /**
     * Сбросить указатель
     *
     * @return void
     */
    public function rewind(): void;

    /**
     * Проверить что под положением
     * указателя есть элемент
     *
     * @return bool
     */
    public function valid(): bool;
}
