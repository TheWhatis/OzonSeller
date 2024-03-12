<?php
/**
 * Файл с классом-сервисом для
 * работы с остатками
 *
 * PHP version 8
 *
 * @category V2
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */

namespace Whatis\OzonSeller\V2;

use Whatis\OzonSeller\Service\BaseService;
use Whatis\OzonSeller\Attribute\Mapping;

/**
 * Класс-сервис для работы
 * с остатками
 *
 * PHP version 8
 *
 * @category V2
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */
class Stocks extends BaseService
{
    /**
     * Обновить количество товаров на складах
     *
     * `v2/product/stocks`
     *
     * @param array $stocks Остатки
     *
     * @return mixed
     */
    #[Mapping('v2/product/stocks')]
    public function updateWarehouse(array $stocks): mixed
    {
        return $this->request('POST', 'v2/product/stocks', [
            'stocks' => $stocks
        ]);
    }
}
