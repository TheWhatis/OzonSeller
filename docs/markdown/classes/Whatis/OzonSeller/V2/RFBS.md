***

# RFBS

Класс-сервис для работы
с rfbs

php version 8

* Full name: `\Whatis\OzonSeller\V2\RFBS`
* Parent class: [`\Whatis\OzonSeller\Service\BaseService`](../Service/BaseService.md)

**See Also:**

* https://github.com/TheWhatis/OzonSeller - 



## Properties


### retPath

Основной путь до методов для
возвратов из rfbs

```php
public string $retPath
```






***

## Methods


### returnList

Список заявок на возврат

```php
public returnList(array $filter, int $limit, int $lastId): mixed
```

`v2/returns/rfbs/list`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filter` | **array** | Фильтры |
| `$limit` | **int** | Количество возвращаемых значений |
| `$lastId` | **int** | Параметр пагинации (идентификатор возврата) |





***

### getReturn

Информация о зоявке на возврат

```php
public getReturn(int $returnId): mixed
```

`v2/returns/rfbs/get`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$returnId` | **int** | Идентификатор возврата |





***

### rejectReturn

Отклонить заявку на возврат

```php
public rejectReturn(int $returnId, int $reasonId, string $comment = &#039;&#039;): mixed
```

`v2/returns/rfbs/reject`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$returnId` | **int** | Идентификатор возврата |
| `$reasonId` | **int** | Идентификато причины возврата |
| `$comment` | **string** | Комментарий |





***

### compensate

Вернуть часть стоимости возврата

```php
public compensate(int $returnId, string $amount): mixed
```

`v2/returns/rfbs/compensate`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$returnId` | **int** | Идентификатор возврата |
| `$amount` | **string** | Сумма компенсации |





***

### verifyReturn

Одобрить заявку на возврат

```php
public verifyReturn(int $returnId, string $method): mixed
```

`v2/returns/rfbs/verify`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$returnId` | **int** | Идентификатор возврата |
| `$method` | **string** | Способ возврата товара |





***

### receiveReturn

Подтвердить получение товара на проверку

```php
public receiveReturn(int $returnId): mixed
```

`v2/returns/rfbs/receive-return`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$returnId` | **int** | Идентфикатор возврата |





***

### fullCompensate

Вернуть деньги покупателю

```php
public fullCompensate(int $returnId, int $backWayAmount): mixed
```

`v2/returns/rfbs/return-money`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$returnId` | **int** | Идентификатор возврата |
| `$backWayAmount` | **int** | Сумма, возвращаемая покупателю за пересылку товара |





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
