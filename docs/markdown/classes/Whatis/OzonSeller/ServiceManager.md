***

# ServiceManager

Класс для управления
классами-сервисами
для ozon seller api

PHP version 8

* Full name: `\Whatis\OzonSeller\ServiceManager`

**See Also:**

* https://github.com/TheWhatis/OzonSeller - 



## Properties


### mapping

Карта, связывающая пути
до сервисов (их имена)
и классы сервисов

```php
public static array $mapping
```



* This property is **static**.


***

### token

Используемый токен

```php
protected string $token
```






***

### services

Используемые сервисы

```php
protected array&lt;int,\Whatis\OzonSeller\Service\IService&gt; $services
```






***

### aliases

Алиасы сервисов

```php
protected array&lt;string,string&gt; $aliases
```






***

## Methods


### __construct

Иницилизировать фасад

```php
public __construct(string $token): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **string** | Токен |





***

### mapping

Получить простую карту сервисов и запросов

```php
public static mapping(): array
```



* This method is **static**.








***

### get

Получить класс сервиса по названию

```php
public static get(string $name): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Название |


**Return Value:**

Клаcc сервиса



**Throws:**

- [`ServiceNotFound`](./Exceptions/ServiceNotFound.md)



***

### getService

Получить иницилизированный сервис
по его названию

```php
public static getService(string $name, string $token): \Whatis\OzonSeller\Service\IService
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Название |
| `$token` | **string** | Токен |


**Return Value:**

Сервис




***

### set

Установить новый сервис

```php
public static set(string $name, string $service): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Название |
| `$service` | **string** | Класс сервиса |




**Throws:**

- [`ServiceAlreadyExists`](./Exceptions/ServiceAlreadyExists.md)

- [`InvalidArgumentException`](../../InvalidArgumentException.md)



***

### make

Создать текущий объект

```php
public static make(string $token): static
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **string** | Токен |





***

### checkServiceExists

Проверить что сервис уже иницилизирован

```php
protected checkServiceExists(string $name): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Название |




**Throws:**

- [`ServiceAlreadyExists`](./Exceptions/ServiceAlreadyExists.md)



***

### alias

Установить alias на сервис

```php
public alias(string $name, ?string $alias): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Название |
| `$alias` | **?string** | Псевдоним |




**Throws:**

- [`ServiceAlreadyExists`](./Exceptions/ServiceAlreadyExists.md)

- [`ServiceNotFound`](./Exceptions/ServiceNotFound.md)



***

### initNew

Иницилизация нового сервиса

```php
public initNew(string $name, ?string $alias = null): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Название |
| `$alias` | **?string** | Используемый алиас |





***

### hasService

Проверить что сервис существует

```php
public hasService(string $name): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Название |





***

### composite

Скомпоновать несколько сервисов

```php
public composite(array&lt;string,\Whatis\OzonSeller\Service\IService&gt; $services): \Whatis\OzonSeller\ServiceCompositor
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$services` | **array<string,\Whatis\OzonSeller\Service\IService>** | Сервисы |


**Return Value:**

description




***

### use

Использовать определённый иницилизированный
сервис

```php
public use(string $name): \Whatis\OzonSeller\Service\IService
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Название используемого сервиса |


**Return Value:**

Сервис



**Throws:**

- [`ServiceNotFound`](./Exceptions/ServiceNotFound.md)



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

### __call

Вызов методов из сервисов

```php
public __call(string $method, array $arguments): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** | Метод |
| `$arguments` | **array** | Аргументы |





***


***
> Automatically generated on 2024-03-12
