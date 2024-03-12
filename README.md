# Библиотека для Ozon Seller Api
## Документация
  * [Documentation](https://github.com/TheWhatis/OzonSeller/tree/master/docs/markdown/Home.md "Documentation")
## Установка
```
composer require whatis/ozon-seller
```
## Использование
```php
/// ... Подключение пакета (require_once 'vendor/autoload.php')

// Менеджер для взаимодествия с "сервисами" -
// классами, реализующими методы для
// взаимодействия с api
use Whatis\OzonSeller\ServiceManager;

// Форматировщик тела ответа
use Whatis\OzonSeller\Formatters\ArrayFormatter;

// Фабрика запросов (RequestFactoryInterface)
use GuzzleHttp\Psr7\HttpFactory;

$clientId = 123321
$token 'some-ozon-token-alla';
$manager = ServiceManager::make($clientId, $token)->initNew(
    'v2/fbs', // Ключ сервиса в ServiceManager::$mapping
    'fbs'     // Алиас для последующего взаимодейстия
);

// Иницилизируем ещё несколько
$manager->initNew('v3/fbs', 'fbs')
        ->initNew('v2/rfbs');

// Создание алиаса отдельно
$manager->alias('v2/rfbs', 'rfbs')

// Можно установить свой форматировщик
$manager->withFormatter(new ArrayFormatter);

// Можно установить свою фабрику запросов
$manager->withRequestFactory(new HttpFactory);

// Получение сборочных заданий
$reasons = $manager->use('fbs')->cancelReasonList(limit: 1);
$reasons = $manager->fgsCancelReasonList(limit: 1);
$reasons = $manager->cancelReasonListFbs(limit: 1);
var_dump($reasons);

// Получение тегов
$return = $manager->use('rfbs')->getReturn(123);
$return = $manager->rfbsGetReturn(123);
$return = $manager->getReturnRfbs(123);
var_dump($return);
// ...
```

## Создание своего сервиса
```php
<?php
/// ... Подключение пакета (require_once 'vendor/autoload.php')

namespace Whatis\OzonSeller\Example;

use Whatis\OzonSeller\Service\BaseService;

// Атрибут, необходимый для
// метода ServiceManager::mapping
use Whatis\OzonSeller\Attribute\Mapping;

use DateTime;
use DateTimeZone;

/**
 * Пример сервиса
 *
 * PHP version 8
 *
 * @category Example
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */
class Service extends BaseService
{
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

use Whatis\OzonSeller\ServiceManager;
use Whatis\OzonSeller\Example\Service;

ServiceManager::set('example', Service::class);

// ...
```
### Использование сервиса
```php
<?php
/// ... Подключение пакета (require_once 'vendor/autoload.php')

use Whatis\OzonSeller\Example\Service;
use Whatis\OzonSeller\ServiceManager;

$clientId = 123321
$token = 'some-ozon-token-alla';

// Обычное использование
$service = new Service($clientId, $token);
var_dump($service->get());

// С помощью ServiceManager
$manager = ServiceManager::make($clientId, $token)->initNew('example');

$result = $manager->use('example')->get();
$result = $manager->exampleGet();
$result = $manager->getExample();
var_dump($result);
```
