***

# IClient

Интерфейс клиента
для ozon seller api

PHP version 8

* Full name: `\Whatis\OzonSeller\Http\IClient`

**See Also:**

* https://github.com/TheWhatis/OzonSeller - 



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

### getFormatter

Получить форматер

```php
public getFormatter(): \Whatis\OzonSeller\Formatters\IJsonFormatter
```












***

### request

Выполнить запрос к ozon seller api

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
