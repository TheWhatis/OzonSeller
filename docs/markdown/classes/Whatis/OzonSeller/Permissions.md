***

# Permissions

Интерфейс сервиса

PHP version 8

* Full name: `\Whatis\OzonSeller\Permissions`

**See Also:**

* https://github.com/TheWhatis/OzonSeller - 



## Properties


### bitmask

Сформированная битмаска из
переданных разрешений

```php
protected int $bitmask
```






***

### permissions

Список переданных разрешений

```php
protected array&lt;int,\Whatis\OzonSeller\Enums\Permission&gt; $permissions
```






***

## Methods


### __construct

Иницилизация класса для
работы с разрешениями
токена

```php
public __construct(\Whatis\OzonSeller\Enums\Permission $permissions): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$permissions` | **\Whatis\OzonSeller\Enums\Permission** | Разрешения |





***

### get

Получить все разрешения

```php
public get(): array&lt;int,\Whatis\OzonSeller\Enums\Permission&gt;
```









**Return Value:**

Разрешения




***

### has

Проверить что одно из переданных
разрешенний установлено

```php
public has(\Whatis\OzonSeller\Enums\Permission $permissions): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$permissions` | **\Whatis\OzonSeller\Enums\Permission** | Разрешения |





***

### contains

Проверить что все переданные
разрешения установлены

```php
public contains(\Whatis\OzonSeller\Enums\Permission $permissions): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$permissions` | **\Whatis\OzonSeller\Enums\Permission** | Разрешения |





***

### set

Установить новые разрешения

```php
public set(\Whatis\OzonSeller\Enums\Permission $permissions): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$permissions` | **\Whatis\OzonSeller\Enums\Permission** | Разрешения |





***

### delete

Удалить разрешения из текущих

```php
public delete(\Whatis\OzonSeller\Enums\Permission $permissions): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$permissions` | **\Whatis\OzonSeller\Enums\Permission** | Разрешения |





***

### hasByToken

Проверить что имеются
все необходимые разрешения
в токене

```php
public hasByToken(string $jwtToken): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$jwtToken` | **string** | Jwt Токен |





***

### _throwInvalidToken

Вывести ошибку о том, что передан
неверный jwt token

```php
private static _throwInvalidToken(string $token): never
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **string** | Токен |




**Throws:**

- [`InvalidArgumentException`](../../InvalidArgumentException.md)



***

### createBitmask

Сгенерировать битмаску

```php
public static createBitmask(\Whatis\OzonSeller\Enums\Permission $permissions): int
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$permissions` | **\Whatis\OzonSeller\Enums\Permission** | Разрешения |


**Return Value:**

Битмаска




***

### getJwtBitmask

Получить битмаску из токена

```php
public static getJwtBitmask(string $jwtToken): int
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$jwtToken` | **string** | Токен |


**Return Value:**

Битмаска



**Throws:**

- [`InvalidArgumentException`](../../InvalidArgumentException.md)



***

### asString

Преобразовать в строку

```php
public asString(): string
```












***


***
> Automatically generated on 2024-03-12
