***

# ServiceCompositor

Класс-сервис для работы
с ценами

PHP version 8

* Full name: `\Whatis\OzonSeller\ServiceCompositor`
* Parent class: [`BaseService`](./BaseService.md)

**See Also:**

* https://github.com/TheWhatis/wb-api-skeleton - 



## Properties


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
public __construct(array&lt;string,\Whatis\OzonSeller\Service\IService&gt; $services): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$services` | **array<string,\Whatis\OzonSeller\Service\IService>** | Сервисы |





***

### make

Создать композитор

```php
public make(array $services): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$services` | **array** | Сервисы |





***

### single

Создать композитор с одним сервисом

```php
public static single(string $name, \Whatis\OzonSeller\Service\IService $service): static
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Название сервиса |
| `$service` | **\Whatis\OzonSeller\Service\IService** | Сервис |





***

### add

Добавить новый сервис в композитор

```php
public add(string $name, \Whatis\OzonSeller\Service\IService $service): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Название сервиса |
| `$service` | **\Whatis\OzonSeller\Service\IService** | Сервис |





***

### __call

Вызов методов из используемых
сервисов (если есть)

```php
public __call(string $method, mixed $arguments): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** | Метод |
| `$arguments` | **mixed** |  |




**Throws:**

- [`BadMethodCallException`](./BadMethodCallException.md)



***


***
> Automatically generated on 2024-03-12
