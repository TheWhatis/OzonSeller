***

# Warehouse

Класс-сервис для работы
со складами

PHP version 8

* Full name: `\Whatis\OzonSeller\V1\Warehouse`
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

## Methods


### list

Список складов

```php
public list(): mixed
```

`v1/warehouse/list`










***

### deliveryMethods

Список методов доставки склада

```php
public deliveryMethods(int $limit, int $offset, array $filter = []): mixed
```

`v1/warehouse/delivery-method/list`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$limit` | **int** | Количество возвращаемых методов |
| `$offset` | **int** | Отступ (элемент пагинации) |
| `$filter` | **array** | Фильтры |





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
