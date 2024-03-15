<?php
/**
 * Файл с классом-сервисом для
 * работы со складами
 *
 * PHP version 8
 *
 * @category V1
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */

namespace Whatis\OzonSeller\V1;

use Whatis\OzonSeller\Service\BaseService;
use Whatis\OzonSeller\Attribute\Mapping;

/**
 * Класс-сервис для работы
 * со складами
 *
 * PHP version 8
 *
 * @category V1
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */
class Warehouse extends BaseService
{
    /**
     * Основной путь до методов
     *
     * @var string
     */
    public string $path = 'v1/warehouse';

    /**
     * Список складов
     *
     * `v1/warehouse/list`
     *
     * @return mixed
     */
    #[Mapping(':path/list')]
    public function list(): mixed
    {
        return $this->request('POST', "{$this->path}/list");
    }

    /**
     * Список методов доставки склада
     *
     * `v1/warehouse/delivery-method/list`
     *
     * @param int   $limit  Количество возвращаемых методов
     * @param int   $offset Отступ (элемент пагинации)
     * @param array $filter Фильтры
     *
     * @return mixed
     */
    #[Mapping(':path/delivery-method/list')]
    public function deliveryMethods(int $limit, int $offset = 0, $filter = []): mixed
    {
        return $this->request('POST', "{$this->path}/delivery-method/list", [
            'limit' => $limit,
            'offset' => $offset,
            'filter' => $filter
        ]);
    }
}
