<?php
/**
 * Файл с исключением, возникающим
 * когда сервис не найден в
 * менеджере
 *
 * PHP version 8
 *
 * @category Exceptions
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */

namespace Whatis\OzonSeller\Exceptions;

use Whatis\OzonSeller\ServiceManager;

use Exception;
use Throwable;

/**
 * Исключение, возникающее
 * когда сервис не найден в
 * менеджере
 *
 * PHP version 8
 *
 * @category Exceptions
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */
class ServiceNotFound extends Exception
{
    /**
     * Название
     *
     * @var string
     */
    protected string $name;

    /**
     * Карта
     *
     * @var array
     */
    protected array $mapping;

    /**
     * Иницилизация исключения
     *
     * @param string     $name     Название неверного сервиса
     * @param array      $mapping  Карта названий и сервисов
     * @param ?Throwable $previous Предыдущее исключение
     */
    public function __construct(
        string $name, array $mapping, ?Throwable $previous = null
    ) {
        parent::__construct(
            sprintf(
                'Service \'%s\' does not exists in \'%s\' ',
                $name, ServiceManager::class
            ), 0, $previous
        );

        $this->name = $name;
        $this->mapping = $mapping;
    }

    /**
     * Получить название
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Получить карту
     *
     * @return array
     */
    public function getMapping(): array
    {
        return $this->mapping;
    }
}
