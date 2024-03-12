<?php
/**
 * Файл с классом-сервисом для
 * работы с ценами
 *
 * PHP version 8
 *
 * @category V3
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */

namespace Whatis\OzonSeller;

use Whatis\OzonSeller\Service\IService;

/**
 * Класс-сервис для работы
 * с ценами
 *
 * PHP version 8
 *
 * @category V3
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */
class ServiceCompositor extends BaseService
{
    /**
     * Набор используемых сервисов
     *
     * @var array<string, IService>
     */
    protected array $services = [];

    /**
     * Создать композитор
     *
     * @param array<string, IService> $services Сервисы
     */
    public function __construct(array $services)
    {
        foreach ($services as $name => $service) {
            $this->add($name, $service);
        }
    }

    /**
     * Создать композитор
     *
     * @param array $services Сервисы
     *
     * @return static
     */
    public function make(array $services): static
    {
        return new static($services);
    }

    /**
     * Создать композитор с одним сервисом
     *
     * @param string   $name    Название сервиса
     * @param IService $service Сервис
     *
     * @return static
     */
    public static function single(string $name, IService $service)
    {
        return new static([$name => $service]);
    }

    /**
     * Добавить новый сервис в композитор
     *
     * @param string   $name    Название сервиса
     * @param IService $service Сервис
     *
     * @return static
     */
    public function add(string $name, IService $service): static
    {
        $this->services[$name] = $service;
        return $this;
    }

    /**
     * Вызов методов из используемых
     * сервисов (если есть)
     *
     * @param string $method    Метод
     * @param array  $argumetns Аргументы
     *
     * @return mixed
     * @throw  BadMethodCallException
     */
    public function __call($method, $arguments)
    {
        foreach ($this->services as $service) {
            if (method_exists($service, $method)) {
                return $service->$method(...$arguments);
            }
        }

        throw new BadMethodCallException(sprintf(
            'Method %s::%s does not exists', static::class, $method
        ));
    }
}
