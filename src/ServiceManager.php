<?php
/**
 * Файл с классом для управления
 * классами-сервисами
 * для ozon seller api
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

use Whatis\OzonSeller\Http\IClient;
use Whatis\OzonSeller\Http\Client;
use Whatis\OzonSeller\Service\IService;
use Whatis\OzonSeller\Package\IPackage;

use Whatis\OzonSeller\Exceptions\ServiceNotFound;
use Whatis\OzonSeller\Exceptions\ServiceAlreadyExists;
use GuzzleHttp\Exception\ClientException;

use BadMethodCallException;
use Throwable;
use Closure;

/**
 * Класс для управления
 * классами-сервисами
 * для ozon seller api
 *
 * PHP version 8
 *
 * @category Main
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */
class ServiceManager
{
    /**
     * Генераторы сервисов
     *
     * @var array<string, Closure>
     */
    protected array $creators = [];

    /**
     * Используемые сервисы
     *
     * @var array<int, IService>
     */
    protected array $services = [];

    /**
     * Общий клиент для всех сервисов
     *
     * @var IClient
     */
    public readonly IClient $client;

    /**
     * Иницилизировать менеджер
     *
     * @param IClient $client Клиент
     */
    public function __construct(IClient $client)
    {
        $this->client = $client;
    }

    /**
     * Создать экземпляр этого класса
     * со всеми параметрами
     *
     * @param ...$args Аргументы
     *
     * @return static
     */
    public static function new(...$args): static
    {
        return new static(...$args);
    }

    /**
     * Создать менеджер, используя данные
     * авторизации
     *
     * @param int    $clientId Идентификатор клиента
     * @param string $token    Токен
     *
     * @return static
     */
    public static function byCreds(int $clientId, string $token): static
    {
        return new static(new Client($clientId, $token));
    }

    /**
     * Установить новый сервис (расширить менеджер)
     *
     * @param string         $abstract Абстрактное название
     * @param Closure|string $concrete Конкретика
     *
     * @return static
     * @throw  ServiceAlreadyExists
     */
    public function extend(string $abstract, Closure|string $concrete = null): static
    {
        if ($this->hasService($abstract)) {
            throw new ServiceAlreadyExists(sprintf(
                'Service with [%s] name already exists', $abstract
            ));
        }

        if (!$concrete) {
            $concrete = $abstract;
        }

        if (is_string($concrete)) {
            $concrete = fn ($manager) => new $concrete($manager->client);
        }

        $this->creators[$abstract] = $concrete;
        return $this;
    }

    /**
     * Установить по пакету
     *
     * @param IPackage $package Пакет
     *
     * @return static
     */
    public function package(IPackage $package): static
    {
        foreach ($package as $name => $creator) {
            $this->extend($name, $creator);
        }

        return $this;
    }

    /**
     * Проверить что сервис существует
     *
     * @param string $name Название
     *
     * @return bool
     */
    public function hasService(string $name): bool
    {
        return array_key_exists($name, $this->creators)
            || array_key_exists($name, $this->services);
    }

    /**
     * Получить "генератор" сервиса
     *
     * @param string $name название сервиса
     *
     * @return Closure
     */
    public function creator(string $name): Closure
    {
        if ($this->hasService($name)) {
            return fn () => $this->creators[$name]($this);
        }

        throw new ServiceNotFound(sprintf(
            'Service with [%s] name not found', $name
        ));
    }

    /**
     * Разрешить сервис
     *
     * @param string $name Название сервиса
     *
     * @return IService|ServiceCompositor
     * @throw  ServiceNotFound
     */
    protected function resolve(string $name): IService|ServiceCompositor
    {
        return $this->creator($name)();
    }

    /**
     * Получить сервис
     *
     * @param string $name название сервиса
     *
     * @return IService|ServiceCompositor Сервис
     */
    public function service(string $name): IService|ServiceCompositor
    {
        return $this->services[$name] ??= $this->resolve($name);
    }

    /**
     * Использовать сервис
     *
     * @param string $name Название используемого сервиса
     *
     * @return IService|ServiceCompositor Сервис
     */
    public function use(string $name): IService|ServiceCompositor
    {
        return $this->service($name);
    }

    /**
     * Вызов методов из сервисов
     *
     * @param string $method    Метод
     * @param array  $arguments Аргументы
     *
     * @return mixed
     */
    public function __call($method, $arguments)
    {
        try {
            foreach (Utils::splitCamelCase($method) as $segment) {
                if ($this->hasService($segment)) {
                    break;
                }

                $segment = strtolower($segment);
                if ($this->hasService($segment)) {
                    break;
                }
            }

            $sMethod = lcfirst(str_ireplace($segment, '', $method));
            return $this->use($segment)->$sMethod(...$arguments);
        } catch (ClientException|BadMethodCallException $exception) {
            throw $exception;
        } catch (Throwable $exception) {
            throw new BadMethodCallException(
                sprintf('Method %s::%s does not exists', static::class, $method),
                previous: $exception
            );
        }
    }
}
