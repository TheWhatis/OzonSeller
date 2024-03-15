***

# IPackage

Интерфейс для реализации
пакетов сервисов

PHP version 8

* Full name: `\Whatis\OzonSeller\Package\IPackage`
* Parent interfaces: [`Iterator`](../../../Iterator.md)
**See Also:**

* https://github.com/TheWhatis/OzonSeller - 



## Methods


### current

Получить генератор сервиса

```php
public current(): \Closure|string|null
```












***

### key

Получить название сервиса

```php
public key(): ?string
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


***
> Automatically generated on 2024-03-15
