***

# Utils

Класс с вспомогательными методами

PHP version 8

* Full name: `\Whatis\OzonSeller\Utils`

**See Also:**

* https://github.com/TheWhatis/OzonSeller - 




## Methods


### splitCamelCase

Разделить строку по CamelCase

```php
public static splitCamelCase(string $string): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** | Значение |





***

### preparePath

Обработать путь до ресурса в более корректный

```php
public static preparePath(string $path): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | Путь до ресурса |





***

### serviceMappingMethods

Получить корректный методы сервиса
для mapping

```php
public static serviceMappingMethods(string|object $service): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$service` | **string&#124;object** | Сервис |





***

### serviceBasePath

Получить корректный основной путь
до запроса, либо стандартное значение

```php
public static serviceBasePath(string $service, string $default = &#039;unknown&#039;): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$service` | **string** | Сервис |
| `$default` | **string** | Стандартное значение |





***

### serviceMethodPath

Получить корректный путь до запроса
для mapping

```php
public static serviceMethodPath(\ReflectionMethod $method): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **\ReflectionMethod** | Метод |





***


***
> Automatically generated on 2024-03-15
