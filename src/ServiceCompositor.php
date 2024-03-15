<?php
/**
 * Файл с классом-компановщиком для сервисов
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

use Whatis\OzonSeller\Service\IService;
use Whatis\OzonSeller\Service\BaseService;

use Countable;
use Iterator;
use Closure;

/**
 * Класс-компановщик для сервисов
 *
 * PHP version 8
 *
 * @category Main
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */
class ServiceCompositor implements Countable, Iterator
{
    /**
     * Набор используемых сервисов
     *
     * @var array<int, IService|Closure>
     */
    protected array $services = [];

    /**
     * Создать композиторn
     *
     * @param array $services Сервисы
     */
    public function __construct(array $services = [])
    {
        foreach ($services as $service) {
            $this->add($service);
        }
    }

    /**
     * Добавить новый сервис в композитор
     *
     * @param IService|Closure $service Сервис
     *
     * @return static
     */
    public function add(IService|Closure $service): static
    {
        $this->services[] = $service;
        return $this;
    }

    /**
     * Проверить количество используемых сервисов
     *
     * @return int
     */
    public function count(): int
    {
        return count($this->services);
    }

    /**
     * Получить генератор сервиса
     *
     * @return IService
     */
    public function current(): IService
    {
        $key = key($this->services);
        if ($this->services[$key] instanceof IService) {
            return $this->services[$key];
        }

        return $this->services[$key] = $this->services[$key]();
    }

    /**
     * Получить название сервиса
     *
     * @return ?int
     */
    public function key(): ?int
    {
        return key($this->services);
    }

    /**
     * Перейти к след-му пакету
     *
     * @return void
     */
    public function next(): void
    {
        next($this->services);
    }

    /**
     * Сбросить указатель
     *
     * @return void
     */
    public function rewind(): void
    {
        reset($this->services);
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

    /**
     * Вызов методов из используемых
     * сервисов (если есть)
     *
     * @param string $method    Метод
     * @param array  $arguments Аргументы
     *
     * @return mixed
     * @throw  BadMethodCallException
     */
    public function __call($method, $arguments)
    {
        foreach ($this as $service) {
            if (method_exists($service, $method)) {
                return $service->$method(...$arguments);
            }
        }

        throw new BadMethodCallException(sprintf(
            'Method %s::%s does not exists', static::class, $method
        ));
    }
}
