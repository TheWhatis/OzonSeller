<?php
/**
 * Файл с регистрацией сервисов
 * для `ServiceManager`
 *
 * PHP version 8
 *
 * @category Main
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */

use Whatis\OzonSeller\ServiceManager;

use Whatis\OzonSeller\V1;
use Whatis\OzonSeller\V2;
use Whatis\OzonSeller\V3;
use Whatis\OzonSeller\V4;
use Whatis\OzonSeller\V5;

ServiceManager::set('v1/fbs', V1\FBS::class);
ServiceManager::set('v2/fbs', V2\FBS::class);
ServiceManager::set('v3/fbs', V3\FBS::class);
ServiceManager::set('v4/fbs', V4\FBS::class);
ServiceManager::set('v5/fbs', V5\FBS::class);

ServiceManager::set('v1/stocks', V1\Stocks::class);
ServiceManager::set('v2/stocks', V2\Stocks::class);
ServiceManager::set('v3/stocks', V3\Stocks::class);

ServiceManager::set('v1/prices', V1\Prices::class);
ServiceManager::set('v4/prices', V4\Prices::class);

ServiceManager::set('v1/warehouse', V1\Warehouse::class);
ServiceManager::set('v2/rfbs', V2\RFBS::class);
