***

# MultiEncodeTrait

Трейт с реализованным методом
для закодирования переданных данных
в string json или StreamInterface

PHP version 8

* Full name: `\Whatis\OzonSeller\Formatters\MultiEncodeTrait`

**See Also:**

* https://github.com/TheWhatis/OzonSeller - 




## Methods


### encode

Закодировать переданный контент
в строку json или StreamInterface

```php
public encode(mixed $content): \Psr\Http\Message\StreamInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **mixed** | Контент |




**Throws:**

- [`InvalidArgumentException`](../../../InvalidArgumentException.md)



***

### toArray

Конвертировать контент в массив

```php
public toArray(array|\stdClass $content): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **array&#124;\stdClass** | Контент |





***

### canToArray

Проверить что объект может быть
сконвертирован в массив

```php
public canToArray(mixed $content): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **mixed** | Контент |





***

### isValidJson

Проверить что строка имеет валидный json

```php
public isValidJson(string $content): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** | Строка в json |





***

### validateJsonString

Валидировать строку json

```php
protected validateJsonString(string $content): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** | Контент в json |





***

### throwInvalidJson

Вывести ошибку, если передан неверный
формат json

```php
public throwInvalidJson(string $content): never
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** | Контент в неверном json |





***

### contentIsEmpty

Проверить что контент пустой

```php
protected contentIsEmpty(mixed $content): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **mixed** | Контент |





***

***
> Automatically generated on 2024-03-12

