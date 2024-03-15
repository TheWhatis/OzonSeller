***

# FBS

Класс-сервис для работы
с fbs

PHP version 8

* Full name: `\Whatis\OzonSeller\V5\FBS`
* Parent class: [`\Whatis\OzonSeller\Service\BaseService`](../Service/BaseService.md)

**See Also:**

* https://github.com/TheWhatis/OzonSeller - 



## Properties


### exPath

Основной путь до методов для
работы с экземплярами товаров

```php
public string $exPath
```






***

## Methods


### exemplarSet

Проверить и сохранить данные экземпляров

```php
public exemplarSet(string $postingNumber, array $products, int $boxQuantity): mixed
```

`v5/fbs/posting/product/exemplar/set`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$postingNumber` | **string** | Идентификатор отправления |
| `$products` | **array** | Список товаров |
| `$boxQuantity` | **int** | Количество коробок, в которые упакован товар |





***

### exemplars

Получить данные созданных экземлпяров

```php
public exemplars(string $postingNumber): mixed
```

`v5/fbs/posting/product/exemplar/create-or-get`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$postingNumber` | **string** | Идентификатор отправления |





***


## Inherited methods


### __construct

Иницилизация сервиса

```php
public __construct(\Whatis\OzonSeller\Http\IClient $client): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$client` | **\Whatis\OzonSeller\Http\IClient** | Клиент |





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
> Automatically generated on 2024-03-15
