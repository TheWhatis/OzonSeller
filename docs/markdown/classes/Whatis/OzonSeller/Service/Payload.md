***

# Payload

Класс полезной нагрузки
для создания запросов из
сервиса `IService`

PHP version 8

* Full name: `\Whatis\OzonSeller\Service\Payload`

**See Also:**

* https://github.com/TheWhatis/OzonSeller - 



## Properties


### body

Тело запроса

```php
public mixed $body
```






***

### params

Параметры запроса

```php
public array $params
```






***

### headers

Заголовки запроса

```php
public array $headers
```






***

## Methods


### __construct

Создать полезную нагрузку

```php
public __construct(mixed $body = null, array $params = [], array $headers = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$body` | **mixed** | Тело запроса |
| `$params` | **array** | Параметры запроса |
| `$headers` | **array** | Заголвки запроса |





***

### make

Создать полезную нагрузку

```php
public static make( $args): static
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$args` | **** | Аргументы для __construct |





***

### byBody

Создать полезную нагрузку с телом

```php
public static byBody(mixed $body): static
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$body` | **mixed** | Тело |





***

### byParams

Создать полезную нагрузку с параметрами

```php
public static byParams(array $params): static
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$params` | **array** | Параметры |





***

### byHeaders

Создать полезную нагрузку с заголовками

```php
public static byHeaders(array $headers): static
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$headers` | **array** | Заголовки |





***

### withBody

Установить тело запроса

```php
public withBody(mixed $body): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$body` | **mixed** | Тело запроса |





***

### withParams

Установить параметры запроса

```php
public withParams(array $params): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$params` | **array** | Параметры |





***

### withHeaders

Установить заголовки запроса

```php
public withHeaders(array $headers): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$headers` | **array** | Заголовки |





***


***
> Automatically generated on 2024-03-12
