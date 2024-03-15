***

# DefaultPackage

Пакет с основными сервисами библиотеки

PHP version 8

* Full name: `\Whatis\OzonSeller\Package\DefaultPackage`
* Parent class: [`\Whatis\OzonSeller\Package\BasePackage`](./BasePackage.md)

**See Also:**

* https://github.com/TheWhatis/OzonSeller - 




## Methods


### packages

Получить пакеты

```php
public packages(): array&lt;string,string&gt;
```












***


## Inherited methods


### __construct

Иницилизация пакета

```php
public __construct(): mixed
```












***

### packages

Получить пакеты

```php
public packages(): array&lt;string,\Closure|string|null&gt;
```




* This method is **abstract**.




**Return Value:**

description




***

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
