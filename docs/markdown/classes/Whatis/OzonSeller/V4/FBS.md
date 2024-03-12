***

# FBS

Класс-сервис для работы
с fbs

PHP version 8

* Full name: `\Whatis\OzonSeller\V4\FBS`
* Parent class: [`\Whatis\OzonSeller\Service\BaseService`](../Service/BaseService.md)

**See Also:**

* https://github.com/TheWhatis/wb-api-skeleton - 



## Properties


### exPath

Основной путь до методов для
работы с экземплярами товаров

```php
public string $exPath
```






***

### psPath

Основной путь до методов для
работы с отправленями

```php
public string $psPath
```






***

## Methods


### validateMarkCodes

Валидация кодов маркировки

```php
public validateMarkCodes(string $postingNumber, array $products): mixed
```

`v4/fbs/posting/product/exemplar/validate`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$postingNumber` | **string** | Идентификатор отправления |
| `$products` | **array** | Список товаров |





***

### exemplarStatus

Получить статус добавления экземпляров

```php
public exemplarStatus(string $postingNumber): mixed
```

`v4/fbs/posting/product/exemplar/status`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$postingNumber` | **string** | Идентификатор отправления |





***

### collectPosting

Собрать заказ

```php
public collectPosting(string $postingNumber, array $packages, array $with = []): mixed
```

`v4/posting/fbs/ship`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$postingNumber` | **string** | Идентификатор отправления |
| `$packages` | **array** | Список упаковок отправлений |
| `$with` | **array** | Доп. информация |





***

### partCollectPosting

Частичная сборка отправления

```php
public partCollectPosting(string $postingNumber, array $products): mixed
```

`v4/posting/fbs/ship/package`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$postingNumber` | **string** | Идентификатор отправления |
| `$products` | **array** | Товары |





***


## Inherited methods


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
