***

# TClient

Трейт, реализующий `IClient`

PHP version 8

* Full name: `\Whatis\OzonSeller\Http\TClient`

**See Also:**

* https://github.com/TheWhatis/OzonSeller - 



## Properties


### clinetId

Идентификатор клиента

```php
public int $clinetId
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
protected \Whatis\OzonSeller\Formatters\IJsonFormatter $formatter
```






***

### requestFactory

Фабрика запросов

```php
protected \Psr\Http\Message\RequestFactoryInterface $requestFactory
```






***

## Methods


### __construct

Иницилизация клиента

```php
public __construct(int $clientId, string $token): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$clientId` | **int** | Идентификатор клиента |
| `$token` | **string** | Токен ozon seller api |





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

### withFormatter

Установить форматтер body

```php
public withFormatter(\Whatis\OzonSeller\Formatters\IJsonFormatter $formatter): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatter` | **\Whatis\OzonSeller\Formatters\IJsonFormatter** | Форматер |





***

### getFormatter

Получить форматер

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
> Automatically generated on 2024-03-12

