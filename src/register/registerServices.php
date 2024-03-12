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

ServiceManager::set('v1/prices', V1\Prices::class);
