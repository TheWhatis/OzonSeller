<?php
/**
 * Файл с абстрактным классом для
 * пакета (с реализацией основных
 * методов)
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

use Closure;

/**
 * Файл с абстрактным классом для
 * пакета (с реализацией основных
 * методов)
 *
 * PHP version 8
 *
 * @category Package
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */
abstract class BasePackage implements IPackage
{
    /**
     * Расширения
     *
     * @var array<string, Closure>
     */
    protected array $packages;

    /**
     * Иницилизация пакета
     */
    public function __construct()
    {
        $this->packages = $this->packages();
    }

    /**
     * Получить пакеты
     *
     * @return array<string, Closure|string|null> description
     */
    abstract public function packages(): array;

    /**
     * Получить генератор сервиса
     *
     * @return Closure|string|null
     */
    public function current(): Closure|string|null
    {
        return current($this->packages);
    }

    /**
     * Получить название сервиса
     *
     * @return ?string
     */
    public function key(): ?string
    {
        return key($this->packages);
    }

    /**
     * Перейти к след-му пакету
     *
     * @return void
     */
    public function next(): void
    {
        next($this->packages);
    }

    /**
     * Сбросить указатель
     *
     * @return void
     */
    public function rewind(): void
    {
        reset($this->packages);
    }

    /**
     * Проверить что под положением
     * указателя есть элемент
     *
     * @return bool
     */
    public function valid(): bool
    {
        return !is_null($this->key());
    }
}
