<?php
/**
 * Файл с классом-сервисом для
 * работы с остатками
 *
 * PHP version 8
 *
 * @category V3
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */

namespace Whatis\OzonSeller\V3;

use Whatis\OzonSeller\Service\BaseService;
use Whatis\OzonSeller\Attribute\Mapping;

/**
 * Класс-сервис для работы
 * с остатками
 *
 * PHP version 8
 *
 * @category V3
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */
class Stocks extends BaseService
{
    /**
     * Получить информацию по количеству товаров
     *
     * `v3/product/info/stocks`
     *
     * @param int    $limit  Количество значений
     * @param string $lastId Элемент пагинации
     * @param array  $filter Фильтры
     *
     * @return mixed
     */
    #[Mapping('v3/product/info/stocks')]
    public function get(int $limit, string $lastId = '', array $filter = []): mixed
    {
        return $this->request('POST', 'v3/product/info/stocks', [
            'limit' => $limit,
            'last_id' => $lastId,
            'filter' => $filter
        ]);
    }
}
