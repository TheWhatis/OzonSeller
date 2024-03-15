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


### creators

Генераторы сервисов

```php
protected array&lt;string,\Closure&gt; $creators
```






***

### services

Используемые сервисы

```php
protected array&lt;int,\Whatis\OzonSeller\Service\IService&gt; $services
```






***

### client

Общий клиент для всех сервисов

```php
public \Whatis\OzonSeller\Http\IClient $client
```






***

## Methods


### __construct

Иницилизировать менеджер

```php
public __construct(\Whatis\OzonSeller\Http\IClient $client): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$client` | **\Whatis\OzonSeller\Http\IClient** | Клиент |





***

### new

Создать экземпляр этого класса
со всеми параметрами

```php
public static new( $args): static
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$args` | **** | Аргументы |





***

### byCreds

Создать менеджер, используя данные
авторизации

```php
public static byCreds(int $clientId, string $token): static
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$clientId` | **int** | Идентификатор клиента |
| `$token` | **string** | Токен |





***

### extend

Установить новый сервис (расширить менеджер)

```php
public extend(string $abstract, \Closure|string $concrete = null): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$abstract` | **string** | Абстрактное название |
| `$concrete` | **\Closure&#124;string** | Конкретика |




**Throws:**

- [`ServiceAlreadyExists`](./Exceptions/ServiceAlreadyExists.md)



***

### package

Установить по пакету

```php
public package(\Whatis\OzonSeller\Package\IPackage $package): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$package` | **\Whatis\OzonSeller\Package\IPackage** | Пакет |





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

### creator

Получить "генератор" сервиса

```php
public creator(string $name): \Closure
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | название сервиса |





***

### resolve

Разрешить сервис

```php
protected resolve(string $name): \Whatis\OzonSeller\Service\IService|\Whatis\OzonSeller\ServiceCompositor
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Название сервиса |




**Throws:**

- [`ServiceNotFound`](./Exceptions/ServiceNotFound.md)



***

### service

Получить сервис

```php
public service(string $name): \Whatis\OzonSeller\Service\IService|\Whatis\OzonSeller\ServiceCompositor
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | название сервиса |


**Return Value:**

Сервис




***

### use

Использовать сервис

```php
public use(string $name): \Whatis\OzonSeller\Service\IService|\Whatis\OzonSeller\ServiceCompositor
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Название используемого сервиса |


**Return Value:**

Сервис




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
> Automatically generated on 2024-03-15
