<?php
/**
 * Файл с классом-сервисом для
 * работы с ценами
 *
 * PHP version 8
 *
 * @category V4
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */

namespace Whatis\OzonSeller\V4;

use Whatis\OzonSeller\Service\BaseService;
use Whatis\OzonSeller\Attribute\Mapping;

/**
 * Класс-сервис для работы
 * с ценами
 *
 * PHP version 8
 *
 * @category V4
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */
class Prices extends BaseService
{
    /**
     * Получить информацию о цене товаров
     *
     * `v4/product/info/prices`
     *
     * @param int    $limit  Количество выдаваемых значений
     * @param string $lastId Элемент пагинации
     * @param array  $filter Фильтры по ценам
     *
     * @return mixed
     */
    #[Mapping('v4/product/info/prices')]
    public function get(int $limit, string $lastId = '', array $filter = [])
    {
        return $this->request('POST', 'v4/product/info/prices', [
            'limit' => $limit,
            'last_id' => $lastId,
            'filter' => $filter
        ]);
    }
}
