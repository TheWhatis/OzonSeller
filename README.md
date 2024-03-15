# Библиотека для Ozon Seller Api
## Документация
  * [Documentation](https://github.com/TheWhatis/OzonSeller/tree/master/docs/markdown/Home.md "Documentation")
## Установка
```
composer require whatis/ozon-seller
```

## Использование
### Стандартное использование
```php
/// ... Подключение пакета (require_once 'vendor/autoload.php')

use Whatis\OzonSeller\Client\Client;
use Whatis\OzonSeller\V2\FBS;

$clientId = 123321
$token 'some-ozon-token-alla'

$fbs = new FBS(new Client($clientId, $token));

var_dump($fbs->countryList());
// ...
```
### С использованием ServiceManager
```php
/// ... Подключение пакета (require_once 'vendor/autoload.php')

use Whatis\OzonSeller\Client\Client;
use Whatis\OzonSeller\ServiceManager;
use Whatis\OzonSeller\ServiceCompositor;
use Whatis\OzonSeller\Package\DefaultPackage;

$clientId = 123321
$token 'some-ozon-token-alla'

// С использованием клиента
$manager = new ServiceManager(new Client($clientId, $token));

// Без использования клиента
$manager = ServiceManager::byCreds($clientId, $token);

// Для работы с сервисами по-умолчанию, необходимо
// расширить менеджер пакетом DefaultPackage
$manager->package(new DefaultPackage);

// Вы можете расширять менеджер своими сервисами,
// например, создать псевдоним для существующего
$manager->extend('fbs', fn ($manager) => $manager->service('v2/fbs'));

// Или скомпановать несколько сервисов
// под одним названием
$manager->extend('composed', fn ($manager) => new ServiceCompositor([
    $manager->creator('v2/fbs'),
    $manager->creator('v3/fbs')
]));

// Стандартное использование
var_dump($manager->use('fbs')->countryList());
var_dump($manager->use('v2/fbs')->countryList());
var_dump($manager->use('composed')->countryList());

// С автоматическим поиском сервиса и метода.
// Это работает так: делится название метода по
// Camel|Case, если находит название сервиса
// по одному из разделенных слов, то удаляет
// его из названия метода и вызывает его
// из сервиса: fbsCountryList->|fbs|countryList,
// countryListFbs->countryList|Fbs|

var_dump($manager->fbsCountryList());
var_dump($manager->countryListFbs());
// ...
```

## Создание своего сервиса
```php
<?php
/// ... Подключение пакета (require_once 'vendor/autoload.php')

namespace Whatis\OzonSeller\Example;

use Whatis\OzonSeller\Service\BaseService;

// Атрибут, необходимый для создания
// карты api методов->методов класса
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
