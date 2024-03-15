***

# FBS

Класс-сервис для работы
с fbs

PHP version 8

* Full name: `\Whatis\OzonSeller\V1\FBS`
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


### postingRestrictions

Получить ограничения пункта приёма

```php
public postingRestrictions(string $postingNumber): mixed
```

`v1/posting/fbs/restrictions`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$postingNumber` | **string** | Идентификатор отправления |





***

### carriageAvailableList

Получить список доступных перевозок

```php
public carriageAvailableList(int $methodId, string $departureDate): mixed
```

`v1/posting/carriage-available/list`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$methodId` | **int** | Фильтр по методу доставки |
| `$departureDate` | **string** | Дата отгрузки |





***

### createPostingsLabel

Метод для создания задания на асинхронное
создание этикеток

```php
public createPostingsLabel(string[] $postingNumbers): mixed
```

`v1/posting/fbs/package-label/create`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$postingNumbers` | **string[]** | Идентификаторы отправлений |





***

### getCreateTaskPostingsLabel

Получить данные задания на
формирование этикеток

```php
public getCreateTaskPostingsLabel(int $taskId): mixed
```

`v1/posting/fbs/package-label/get`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$taskId` | **int** | Идентификатор задания |





***

### cancelReasons

Получить причины отмены отправлений

```php
public cancelReasons(array $postingNumbers): mixed
```

`v1/posting/fbs/cancel-reason`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$postingNumbers` | **array** | Идентификаторы отправлений |





***

### postingAvailableTimeslot

Получить доступные даты для переноса доставки

```php
public postingAvailableTimeslot(string $postingNumber): mixed
```

`v1/posting/fbs/timeslot/change-restrictions`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$postingNumber` | **string** | Идентификатор отправления |





***

### setPostingTimeslot

Перенести дату доставки

```php
public setPostingTimeslot(array $timeslot, string $postingNumber): mixed
```

`v1/posting/fbs/timeslot/set`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$timeslot` | **array** | Новый период для даты доставки |
| `$postingNumber` | **string** | Идентификатор отправления |





***

### etgb

Таможенные декларации ETGB

```php
public etgb(array $date): mixed
```

`v1/posting/global/etgb`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$date` | **array** | Дата |





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
