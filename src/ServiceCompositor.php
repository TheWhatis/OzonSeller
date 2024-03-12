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
use Whatis\OzonSeller\Service\BaseService;
use Countable;

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
class ServiceCompositor extends BaseService implements Countable
{
    /**
     * Идентификатор клиента
     *
     * @var int
     */
    protected readonly int $clientId;

    /**
     * Токен
     *
     * @var string
     */
    protected readonly string $token;

    /**
     * Набор используемых сервисов
     *
     * @var array<string, IService>
     */
    protected array $services = [];

    /**
     * Создать композитор
     *
     * @param int    $clientId Идентификатор клиента
     * @param string $token    Токен ozon seller api
     * @param array  $services Сервисы
     */
    public function __construct(int $clientId, string $token, array $services = [])
    {
        parent::__construct($clientId, $token);
        $this->clientId = $clientId;
        $this->token = $token;
        foreach ($services as $name => $service) {
            $this->add($name, $service);
        }
    }

    /**
     * Создать композитор
     *
     * @param int    $clientId Идентификатор клиента
     * @param string $token    Токен ozon seller api
     * @param array  $services Сервисы
     *
     * @return static
     */
    public static function make(int $clientId, string $token, array $services = [])
    {
        return new static($clientId, $token, $services);
    }

    /**
     * Добавить новый сервис в композитор
     *
     * @param string          $name    Название сервиса
     * @param IService|string $service Сервис
     *
     * @return static
     */
    public function add(string $name, IService|string $service): static
    {
        if (is_string($service)) {
            if (!is_a($service, IService::class, true)) {
                throw new InvalidArgumentException(sprintf(
                    'Argument service must be implements [%s]', IService::class
                ));
            }

            $service = new $service($this->clientId, $this->token);
        }

        $this->services[$name] = $service;
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
     * Получить названия используемых сервисов
     *
     * @return array
     */
    public function names(): array
    {
        return array_keys($this->services);
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
