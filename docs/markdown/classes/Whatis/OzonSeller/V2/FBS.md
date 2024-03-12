***

# FBS

Класс-сервис для работы
с fbs

PHP version 8

* Full name: `\Whatis\OzonSeller\V2\FBS`
* Parent class: [`\Whatis\OzonSeller\Service\BaseService`](../Service/BaseService.md)

**See Also:**

* https://github.com/TheWhatis/wb-api-skeleton - 



## Properties


### path

Основной путь до методов

```php
public string $path
```






***

### psPath

Другой путь до методов для отправлений

```php
public string $psPath
```






***

## Methods


### getTransBarcode

Получить штрихкод для отгрузки
отправления

```php
public getTransBarcode(int $transId): mixed
```

`v2/posting/fbs/act/get-barcode`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$transId` | **int** | Идентификатор перевозки |





***

### getTextTransBarcode

Получить штрихкод для отгрузки
отправления в текстовом виде

```php
public getTextTransBarcode(int $transId): mixed
```

`v2/posting/fbs/act/get-barcode/text`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$transId` | **int** | Идентификатор перевозки |





***

### countryList

Получить список доступных
стран-изготовителей

```php
public countryList(string $search = &#039;&#039;): mixed
```

`v2/posting/fbs/product/country/list`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$search` | **string** | Фильтрация по строке |





***

### countrySet

Добавить информацию о
стране-изготовителе товара

```php
public countrySet(string $postingNumber, int $productId, string $countryIso): mixed
```

`v2/posting/fbs/product/country/set`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$postingNumber` | **string** | Номер отправления |
| `$productId` | **int** | Идентификатор товара |
| `$countryIso` | **string** | Двухбуквенный код страны в формате ISO-3166-1 |





***

### actCreate

Подтвердить отгрузку и создать документы

```php
public actCreate(int $amount, int $deliveryMethodId, string $departureDate): mixed
```

`v2/posting/fbs/act/create`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$amount` | **int** | Количество грузовых мест |
| `$deliveryMethodId` | **int** | Идентификатор метода доставки |
| `$departureDate` | **string** | Дата отгрузки |





***

### actBarcodeStatus

Получить статус формирования штрихкода
для отгрузки и документов

```php
public actBarcodeStatus(int $actId): mixed
```

`v2/posting/fbs/act/check-status`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$actId` | **int** | Идентификатор задания на формирования документов |





***

### actGetPdf

Получить PDF с документами

```php
public actGetPdf(int $actId): mixed
```

`v2/posting/fbs/act/get-pdf`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$actId` | **int** | идентификатор задания на формирования документов |





***

### invoiceGenerationStatus

Получить статус формирования накладной

```php
public invoiceGenerationStatus(int $actId): mixed
```

`v2/posting/fbs/digital/act/check-status`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$actId` | **int** | Идентификатор задания на формирования документов |





***

### transShippingList

Получить лист отгрузки по перевозке

```php
public transShippingList(int $actId, string $docType = &#039;act_of_acceptance&#039;): mixed
```

`v2/posting/fbs/digital/act/get-pdf`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$actId` | **int** | Идентификатор задания на формирования документов |
| `$docType` | **string** | Тип сфорированного документа |





***

### packageLabels

Получить этикетки для грузового места

```php
public packageLabels(int $actId): mixed
```

`v2/posting/fbs/act/get-container-labels`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$actId` | **int** | Идентификатор задания на формирования документов |





***

### shipmentActList

Список актов по отгрузкам

```php
public shipmentActList(array $filter, int $limit): mixed
```

`v2/posting/fbs/act/list`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filter` | **array** | Фильтры |
| `$limit` | **int** | Максимальное количество актов в ответе |





***

### signShippingDoc

Подписать документы об отгрузке

```php
public signShippingDoc(int $shipmentId, string $docType): mixed
```

`v2/posting/fbs/digital/act/document-sign`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$shipmentId` | **int** | Идентификатор отгрузки |
| `$docType` | **string** | Тип электронного документа |





***

### actPostingList

Список отправлений в акте

```php
public actPostingList(int $actId): mixed
```

`v2/posting/fbs/act/get-postings`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$actId` | **int** | Идентификатор акта |





***


## Inherited methods


### getByBarcode

Получить информацию отправления
по штрихкоду

```php
public getByBarcode(string $barcode): mixed
```

`v2/posting/fbs/get-by-barcode`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$barcode` | **string** | Идентификатор отправления |





***

### postingLabels

Получить этикетки отправлений

```php
public postingLabels(array $postingNumbers): mixed
```

`v2/posting/fbs/package-label`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$postingNumbers` | **array** | Массив с идентификаторами отправлений |





***

### openPostingsArbitrations

Открыть спор по отправлению

```php
public openPostingsArbitrations(string[] $postingNumbers): mixed
```

`v2/posting/fbs/arbitration`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$postingNumbers` | **string[]** | Массив с идентификаторами отправлений |





***

### postingsAwaitingDelivery

Передать отправления к отгрузке

```php
public postingsAwaitingDelivery(string[] $postingNumbers): mixed
```

`v2/posting/fbs/awaiting-delivery`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$postingNumbers` | **string[]** | Массив с идентификаторами отправлений |





***

### cancelReasonList

Получить причины отмены отправлений

```php
public cancelReasonList(): mixed
```

`v2/posting/fbs/cancel-reason/list`










***

### cancelPosting

Отменить отправление

```php
public cancelPosting(int $reasonId, string $reasonMessage, string $postingNumber): mixed
```

`v2/posting/fbs/cancel`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reasonId` | **int** | Идентификатор причиты отмены |
| `$reasonMessage` | **string** | Доп. информация об отмене |
| `$postingNumber` | **string** | Идентификатор отправления |





***

### addPostingProductsWeight

Добавить вес для весовых товаров

```php
public addPostingProductsWeight(array $items, string $postingNumber): mixed
```

`v2/posting/fbs/product/change`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$items` | **array** | Информация о товарах |
| `$postingNumber` | **string** | Идентификатор отправления |





***

### cancelPostingProducts

Отменить отправку некоторых товаров
в отправлении

```php
public cancelPostingProducts(int $reasonId, string $reasonMessage, array $items, string $postingNumber): mixed
```

`v2/posting/fbs/product/cancel`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reasonId` | **int** | Причина отмены товара |
| `$reasonMessage` | **string** | Доп. информация об отмене |
| `$items` | **array** | Товары |
| `$postingNumber` | **string** | Идентификатор отправления |





***

### postingsDelivering

Изменить статус отправлений на "доставляется"

```php
public postingsDelivering(string[] $postingNumbers): mixed
```

`v2/fbs/posting/delivering`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$postingNumbers` | **string[]** | Идентификаторы отправления |





***

### setPostingTrackNumber

Добавить трэк-номера на отправления

```php
public setPostingTrackNumber(array $trackingNumbers): mixed
```

`v2/fbs/posting/tracking-number/set`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$trackingNumbers` | **array** | Массив с параметрами id отправления -&gt; трэк-номер |





***

### postingsLastMile

Изменить статус отправлений на "последняя миля"

```php
public postingsLastMile(string[] $postingNumbers): mixed
```

`v2/fbs/posting/last-mile`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$postingNumbers` | **string[]** | Идентификаторы отправлений |





***

### postingsDelivered

Изменить статус отправлений на "доставлено"

```php
public postingsDelivered(string[] $postingNumbers): mixed
```

`v2/fbs/posting/delivered`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$postingNumbers` | **string[]** | Идентификаторы отправлений |





***

### postingsSentBySeller

Изменить статус на "отправлено продавцом"

```php
public postingsSentBySeller(array $postingNumbers): mixed
```

`v2/fbs/posting/sent-by-seller`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$postingNumbers` | **array** | Идентификаторы отправлений |





***

### __construct

Иницилизация сервиса

```php
public __construct(int $clientId, string $token): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$clientId` | **int** | Идентификатор клиента |
| `$token` | **string** | Токен ozon seller api |





***

### domain

Получить домен для обращения

```php
public static domain(): string
```



* This method is **static**.








***

### basePath

Получить базовый uri

```php
public static basePath(): string
```



* This method is **static**.








***

### withFormatter

Установить форматировщик

```php
public withFormatter(\Whatis\OzonSeller\Formatters\IJsonFormatter $formatter): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatter` | **\Whatis\OzonSeller\Formatters\IJsonFormatter** | Форматировщик |





***

### getFormatter

Получить форматировщик

```php
public getFormatter(): \Whatis\OzonSeller\Formatters\IJsonFormatter
```












***

### withRequestFactory

Установить фабрику запросов

```php
public withRequestFactory(\Psr\Http\Message\RequestFactoryInterface $factory): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$factory` | **\Psr\Http\Message\RequestFactoryInterface** | Фабрика запросов |





***

### getRequestFactory

Получить фабрику запросов

```php
public getRequestFactory(): \Psr\Http\Message\RequestFactoryInterface
```












***

### headers

Получить заголовки из Payload

```php
protected headers(mixed $payload): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$payload` | **mixed** | Полезная нагрузка |





***

### params

Получить параметры из Payload

```php
protected params(mixed $payload): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$payload` | **mixed** | Полезная нагрузка |





***

### body

Получить тело запроса из Payload

```php
protected body(mixed $payload): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$payload` | **mixed** | Полезная нагрузка |





***

### request

Воспроизвести запрос

```php
public request(string|\Whatis\OzonSeller\Enums\HttpMethod $method, string $path, mixed $payload = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string&#124;\Whatis\OzonSeller\Enums\HttpMethod** | Метод |
| `$path` | **string** | Путь до запроса |
| `$payload` | **mixed** | Полезная нагрузка запроса |





***


***
> Automatically generated on 2024-03-12
