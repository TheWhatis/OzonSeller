# Библиотека для WB API
## Документация
  * [Documentation](https://github.com/TheWhatis/WBAPI/tree/master/docs/markdown/Home.md "Documentation")
## Установка
```
composer require whatis/wbapi
```
## Использование
```php
/// ... Подключение пакета (require_once 'vendor/autoload.php')

// Менеджер для взаимодествия с "сервисами" -
// классами, реализующими методы для
// взаимодействия с api
use Whatis\WBAPI\ServiceManager;

// Форматировщик тела ответа
use Whatis\WBAPI\Formatters\ArrayFormatter;

// Фабрика запросов (RequestFactoryInterface)
use GuzzleHttp\Psr7\HttpFactory;

$token 'some.jwt.token.-asdffsdfJLA';
$manager = ServiceManager::make($token)->initNew(
    'v2/tags', // Ключ сервиса в ServiceManager::$mapping
    'tags'     // Алиас для последующего взаимодейстия
);

// Иницилизируем ещё несколько
$manager->initNew('v3/orders', 'orders')
        ->initNew('v2/config');

// Создание алиаса отдельно
$manager->alias('v2/config', 'config')

// Можно установить свой форматировщик
$manager->withFormatter(new ArrayFormatter);

// Можно установить свою фабрику запросов
$manager->withRequestFactory(new HttpFactory);

// Получение сборочных заданий
$orders = $manager->use('orders')->get(limit: 1);
$orders = $manager->getOrders(limit: 1);
$orders = $manager->ordersGet(limit: 1);
var_dump($orders);

// Получение тегов
$tags = $manager->use('tags')->get();
$tags = $manager->getTags();
$tags = $manager->tagsGet();
var_dump($tags);
// ...
```

## Создание своего сервиса
```php
<?php
/// ... Подключение пакета (require_once 'vendor/autoload.php')

namespace Whatis\WBAPI\Example;

use Whatis\WBAPI\Service\BaseService;
use Whatis\WBAPI\Enums\Permission;
use Whatis\WBAPI\Permissions;

// Атрибут, необходимый для
// метода ServiceManager::mapping
use Whatis\WBAPI\Attribute\Mapping;

use DateTime;
use DateTimeZone;

/**
 * Пример сервиса
 *
 * PHP version 8
 *
 * @category Example
 * @package  WBAPI
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */
class Service extends BaseService
{
    /**
     * Получить массив необходимых разрешений
     * для этого сервиса
     *
     * @return Permissions
     */
    public static function getPermissions(): Permissions
    {
        return new Permissions(
            Permission::Marketplace,
            Permission::Statistics,
            Permission::Promotion
        );
    }

    /**
     * Получить базовый uri
     *
     * @return string
     */
    public static function basePath(): string
    {
        return 'api/v3/';
    }

    /**
     * Получить что-то
     *
     * @return mixed
     */
    #[Mapping('orders')]
    public function get(): mixed
    {
        $timezone = new DateTimeZone('UTC');

        $dateTo = new DateTime('now', $timezone);
        $dateFrom = new DateTime('-3 day', $timezone);

        return $this->request(
            'GET', 'orders', [
                'limit' => 10,
                'next' => 0,
                'dateFrom' => $dateFrom->getTimestamp(),
                'dateTo' => $dateTo->getTimestamp()
            ]
        );
    }

    // ...
}
```
### Регистрация сервиса в ServiceManager
```php
/// ... Подключение пакета (require_once 'vendor/autoload.php')

use Whatis\WBAPI\ServiceManager;
use Whatis\WBAPI\Example\Service;

ServiceManager::set('example', Service::class);

// ...
```
### Использование сервиса
```php
<?php
/// ... Подключение пакета (require_once 'vendor/autoload.php')

use Whatis\WBAPI\Example\Service;
use Whatis\WBAPI\ServiceManager;

$token = 'some.jwt.token.-asdffsdfJLA';

// Обычное использование
$service = new Service($token);
var_dump($service->get());

// С помощью ServiceManager
$manager = ServiceManager::make($token)->initNew('example');

$result = $manager->use('example')->get();
$result = $manager->exampleGet();
$result = $manager->getExample();
var_dump($result);
// > stdClass {
// >   ["orders"]=>
// >   array(10) {
// >     [0]=>
// >     stdClass {
// >       ["address"]=>
// >       NULL
// >       ["deliveryType"]=>
// >       string(3) "fbs"
// >       ["supplyId"]=>
// >       string(14) "WB-GI-63588689"
// >       ...


```
