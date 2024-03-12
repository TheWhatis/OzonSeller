***

# ServiceNotFound

Исключение, возникающее
когда сервис не найден в
менеджере

PHP version 8

* Full name: `\Whatis\OzonSeller\Exceptions\ServiceNotFound`
* Parent class: [`Exception`](../../../Exception.md)

**See Also:**

* https://github.com/TheWhatis/OzonSeller - 



## Properties


### name

Название

```php
protected string $name
```






***

### mapping

Карта

```php
protected array $mapping
```






***

## Methods


### __construct

Иницилизация исключения

```php
public __construct(string $name, array $mapping, ?\Throwable $previous = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Название неверного сервиса |
| `$mapping` | **array** | Карта названий и сервисов |
| `$previous` | **?\Throwable** | Предыдущее исключение |





***

### getName

Получить название

```php
public getName(): string
```












***

### getMapping

Получить карту

```php
public getMapping(): array
```












***


***
> Automatically generated on 2024-03-12
