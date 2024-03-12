***

# ServiceCompositor

Класс-сервис для работы
с ценами

PHP version 8

* Full name: `\Whatis\OzonSeller\ServiceCompositor`
* Parent class: [`\Whatis\OzonSeller\Service\BaseService`](./Service/BaseService.md)
* This class implements:
[`\Countable`](../../Countable.md)

**See Also:**

* https://github.com/TheWhatis/wb-api-skeleton - 



## Properties


### clientId

Идентификатор клиента

```php
protected int $clientId
```






***

### token

Токен

```php
protected string $token
```






***

### services

Набор используемых сервисов

```php
protected array&lt;string,\Whatis\OzonSeller\Service\IService&gt; $services
```






***

## Methods


### __construct

Создать композитор

```php
public __construct(int $clientId, string $token, array $services = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$clientId` | **int** | Идентификатор клиента |
| `$token` | **string** | Токен ozon seller api |
| `$services` | **array** | Сервисы |





***

### make

Создать композитор

```php
public static make(int $clientId, string $token, array $services = []): static
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$clientId` | **int** | Идентификатор клиента |
| `$token` | **string** | Токен ozon seller api |
| `$services` | **array** | Сервисы |





***

### add

Добавить новый сервис в композитор

```php
public add(string $name, \Whatis\OzonSeller\Service\IService|string $service): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Название сервиса |
| `$service` | **\Whatis\OzonSeller\Service\IService&#124;string** | Сервис |





***

### count

Проверить количество используемых сервисов

```php
public count(): int
```












***

### names

Получить названия используемых сервисов

```php
public names(): array
```












***

### __call

Вызов методов из используемых
сервисов (если есть)

```php
public __call(string $method, array $arguments): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** | Метод |
| `$arguments` | **array** | Аргументы |




**Throws:**

- [`BadMethodCallException`](./BadMethodCallException.md)



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
