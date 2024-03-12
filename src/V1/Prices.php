<?php
/**
 * Файл с классом-сервисом для
 * работы с ценами
 *
 * PHP version 8
 *
 * @category V1
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */

namespace Whatis\OzonSeller\V1;

use Whatis\OzonSeller\Service\BaseService;
use Whatis\OzonSeller\Attribute\Mapping;

/**
 * Класс-сервис для работы
 * с ценами
 *
 * PHP version 8
 *
 * @category V1
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */
class Prices extends BaseService
{
    /**
     * Обновить цены
     *
     * `v1/product/import/price`
     *
     * @param array $prices Цены
     *
     * @return mixed
     */
    #[Mapping('v1/product/import/prices')]
    public function update(array $prices): mixed
    {
        return $this->request('POST', 'v1/product/import/price', [
            'prices' => $prices
        ]);
    }
}
