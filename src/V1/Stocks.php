<?php
/**
 * Файл с классом-сервисом для
 * работы с остатками
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
 * с остатками
 *
 * PHP version 8
 *
 * @category V1
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */
class Stocks extends BaseService
{
    /**
     * Основной путь до методов
     *
     * @var string
     */
    public string $path = 'v1/product';

    /**
     * Обновить остатки
     *
     * `v1/product/import/stocks`
     *
     * @param array $stocks Остатки товаров
     *
     * @return mixed
     */
    #[Mapping(':path/import/stocks')]
    public function update(array $stocks): mixed
    {
        return $this->request('POST', "{$this->path}/import/stocks", [
            'stocks' => $stocks
        ]);
    }

    /**
     * Информация об остатках на складах продавца
     *
     * `v1/product/info/stocks-by-warehouse/fbs`
     *
     * @param array $skus SKU товаров
     *
     * @return mixed
     */
    #[Mapping(':path/info/stocks-by-warehouse/fbs')]
    public function getByWarehouse(array $skus): mixed
    {
        return $this->request('POST', "{$this->path}/stocks-by-warehouse/fbs", [
            'sku' => $skus
        ]);
    }
}
