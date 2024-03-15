***

# ArrayFormatter

Форматировщик тела ответа,
чтобы получить массив

PHP version 8

* Full name: `\Whatis\OzonSeller\Formatters\ArrayFormatter`
* Parent class: [`\Whatis\OzonSeller\Formatters\BaseFormatter`](./BaseFormatter.md)

**See Also:**

* https://github.com/TheWhatis/OzonSeller - 




## Methods


### decode

Декодировать строку json в
необходимый формат

```php
public decode(string $content): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **string** | Контент |





***


## Inherited methods


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

### withContext

Установить контекст выполнения

```php
public withContext(\Psr\Http\Message\RequestInterface|\Psr\Http\Message\ResponseInterface $context): static
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\Psr\Http\Message\RequestInterface&#124;\Psr\Http\Message\ResponseInterface** | Контекст |





***


***
> Automatically generated on 2024-03-15
