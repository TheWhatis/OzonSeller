***

# TClient

Трейт, реализующий `IClient`

PHP version 8

* Full name: `\Whatis\OzonSeller\Http\TClient`

**See Also:**

* https://github.com/TheWhatis/OzonSeller - 



## Properties


### clientId

Идентификатор клиента

```php
public int $clientId
```






***

### token

Токен

```php
public string $token
```






***

### client

Клиент guzzle

```php
public \GuzzleHttp\Client $client
```






***

### formatter

Используемый форматировщик
тела запроса/ответа

```php
public \Whatis\OzonSeller\Formatters\IJsonFormatter $formatter
```






***

### requestFactory

Фабрика запросов

```php
public \Psr\Http\Message\RequestFactoryInterface $requestFactory
```






***

## Methods


### __construct

Иницилизация клиента

```php
public __construct(int $clientId, string $token, ?\Whatis\OzonSeller\Http\IJsomFormatter $formatter = null, ?\Psr\Http\Message\RequestFactoryInterface $factory = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$clientId` | **int** | Идентификатор клиента |
| `$token` | **string** | Токен ozon seller api |
| `$formatter` | **?\Whatis\OzonSeller\Http\IJsomFormatter** | Форматировщик данных |
| `$factory` | **?\Psr\Http\Message\RequestFactoryInterface** | Фабрика запросов |





***

### getClientId

Получить идентификатор клиента

```php
public getClientId(): int
```












***

### getToken

Получить токен

```php
public getToken(): string
```












***

### getFormatter

Получить форматер

```php
public getFormatter(): \Whatis\OzonSeller\Formatters\IJsonFormatter
```












***

### uri

Получить uri для запроса Request

```php
protected uri(\Whatis\OzonSeller\Http\Payload $payload): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$payload` | **\Whatis\OzonSeller\Http\Payload** | Полезная нагрузка |





***

### headers

Получить заголовки из payload

```php
protected headers(\Whatis\OzonSeller\Http\Payload $payload): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$payload` | **\Whatis\OzonSeller\Http\Payload** |  |





***

### request

Выполнить запрос

```php
public request(\Whatis\OzonSeller\Http\Payload $payload): \Psr\Http\Message\ResponseInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$payload` | **\Whatis\OzonSeller\Http\Payload** | Данные (полезная нагрузка) |





***

***
> Automatically generated on 2024-03-15

