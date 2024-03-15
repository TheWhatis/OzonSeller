<?php
/**
 * Файл пакета с основными сервисами библиотеки
 *
 * PHP version 8
 *
 * @category Package
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */

namespace Whatis\OzonSeller\Package;

use Whatis\OzonSeller\V1;
use Whatis\OzonSeller\V2;
use Whatis\OzonSeller\V3;
use Whatis\OzonSeller\V4;
use Whatis\OzonSeller\V5;

/**
 * Пакет с основными сервисами библиотеки
 *
 * PHP version 8
 *
 * @category Package
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */
class DefaultPackage extends BasePackage
{
    /**
     * Получить пакеты
     *
     * @return array<string, string>
     */
    public function packages(): array
    {
        return [
            'v1/fbs' => V1\FBS::class,
            'v2/fbs' => V2\FBS::class,
            'v3/fbs' => V3\FBS::class,
            'v4/fbs' => V4\FBS::class,
            'v5/fbs' => V5\FBS::class,

            'v1/stocks' => V1\Stocks::class,
            'v2/stocks' => V2\Stocks::class,
            'v3/stocks' => V3\Stocks::class,

            'v1/prices' => V1\Prices::class,
            'v4/prices' => V4\Prices::class,

            'v1/warehouse' => V1\Warehouse::class,
            'v2/rfbs' => V2\RFBS::class,
        ];
    }
}
