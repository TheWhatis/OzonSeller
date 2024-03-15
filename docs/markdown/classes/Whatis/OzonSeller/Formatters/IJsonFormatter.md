***

# IJsonFormatter

Интерфейс форматировщика ответа и запроса
от api, чтобы получить определённый
формат данных

PHP version 8

* Full name: `\Whatis\OzonSeller\Formatters\IJsonFormatter`

**See Also:**

* https://github.com/TheWhatis/OzonSeller - 



## Methods


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

### encode

Закодировать переданный контент
в строку json или StreamInterface

```php
public encode(mixed $content): string|\Psr\Http\Message\StreamInterface
```

Необходим для создания запросов






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **mixed** | Контент |





***

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


***
> Automatically generated on 2024-03-15
