***

# FBS

Класс-сервис для работы
с fbs

PHP version 8

* Full name: `\Whatis\OzonSeller\V3\FBS`
* Parent class: [`\Whatis\OzonSeller\Service\BaseService`](../Service/BaseService.md)

**See Also:**

* https://github.com/TheWhatis/OzonSeller - 



## Properties


### path

Основной путь до методов

```php
public string $path
```






***

## Methods


### unfulfilled

Список необработанных отправлений

```php
public unfulfilled(array $data): mixed
```

`v3/posting/fbs/unfulfilled/list`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** | Данные для работы с методом |





***

### list

Список отправлений

```php
public list(array $data): mixed
```

`v3/posting/fbs/list`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** | Данные для работы с методом |





***

### getByid

Получить отправление по идентификатору

```php
public getByid(string $postingNumber, array $with = []): mixed
```

`v3/posting/fbs/get`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$postingNumber` | **string** | Идентификатор отправления |
| `$with` | **array** | Доп. поля, которые нужно добавить в ответ |





***

### postingQuantityBoxes

Указать количество коробок для
мультикоробочных отправлений

```php
public postingQuantityBoxes(string $postingNumber, int $quantity): mixed
```

`v3/posting/multiboxqty/set`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$postingNumber` | **string** | Идентификатор отправления |
| `$quantity` | **int** | Количество коробок |





***

### returns

Получить информацию о возвратах fbs

```php
public returns(array $filter, int $limit, int $lastId): mixed
```

`v3/returns/company/fbs`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filter` | **array** | Фильтры |
| `$limit` | **int** | Количество значений в ответе |
| `$lastId` | **int** | Параметр пагинации (идентификатор возврата) |





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
