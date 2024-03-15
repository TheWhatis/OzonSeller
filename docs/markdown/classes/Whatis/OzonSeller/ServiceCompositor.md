***

# ServiceCompositor

Класс-компановщик для сервисов

PHP version 8

* Full name: `\Whatis\OzonSeller\ServiceCompositor`
* This class implements:
[`\Countable`](../../Countable.md), [`\Iterator`](../../Iterator.md)

**See Also:**

* https://github.com/TheWhatis/OzonSeller - 



## Properties


### services

Набор используемых сервисов

```php
protected array&lt;int,\Whatis\OzonSeller\Service\IService|\Closure&gt; $services
```






***

## Methods


### __construct

Создать композиторn

```php
public __construct(array $services = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$services` | **array** | Сервисы |





***

### add

Добавить новый сервис в композитор

```php
public add(\Whatis\OzonSeller\Service\IService|\Closure $service): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$service` | **\Whatis\OzonSeller\Service\IService&#124;\Closure** | Сервис |





***

### count

Проверить количество используемых сервисов

```php
public count(): int
```












***

### current

Получить генератор сервиса

```php
public current(): \Whatis\OzonSeller\Service\IService
```












***

### key

Получить название сервиса

```php
public key(): ?int
```












***

### next

Перейти к след-му пакету

```php
public next(): void
```












***

### rewind

Сбросить указатель

```php
public rewind(): void
```












***

### valid

Проверить что под положением
указателя есть элемент

```php
public valid(): bool
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


***
> Automatically generated on 2024-03-15
