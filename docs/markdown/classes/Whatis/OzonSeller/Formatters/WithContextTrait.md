***

# WithContextTrait

Трейт, с реализованным методом
для установки контекста
выполнения форматировщика

PHP version 8

* Full name: `\Whatis\OzonSeller\Formatters\WithContextTrait`

**See Also:**

* https://github.com/TheWhatis/OzonSeller - 



## Properties


### context

Контекст

```php
public \Psr\Http\Message\RequestInterface|\Psr\Http\Message\ResponseInterface|null $context
```






***

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

***
> Automatically generated on 2024-03-15

