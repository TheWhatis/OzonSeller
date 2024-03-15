***

# PostingsTrait

Трейт с реализацией методов для
класса-сервиса, для отправлений

PHP version 8

* Full name: `\Whatis\OzonSeller\V2\FBS\PostingsTrait`

**See Also:**

* https://github.com/TheWhatis/OzonSeller - 




## Methods


### getByBarcode

Получить информацию отправления
по штрихкоду

```php
public getByBarcode(string $barcode): mixed
```

`v2/posting/fbs/get-by-barcode`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$barcode` | **string** | Идентификатор отправления |





***

### postingLabels

Получить этикетки отправлений

```php
public postingLabels(array $postingNumbers): mixed
```

`v2/posting/fbs/package-label`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$postingNumbers` | **array** | Массив с идентификаторами отправлений |





***

### openPostingsArbitrations

Открыть спор по отправлению

```php
public openPostingsArbitrations(string[] $postingNumbers): mixed
```

`v2/posting/fbs/arbitration`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$postingNumbers` | **string[]** | Массив с идентификаторами отправлений |





***

### postingsAwaitingDelivery

Передать отправления к отгрузке

```php
public postingsAwaitingDelivery(string[] $postingNumbers): mixed
```

`v2/posting/fbs/awaiting-delivery`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$postingNumbers` | **string[]** | Массив с идентификаторами отправлений |





***

### cancelReasonList

Получить причины отмены отправлений

```php
public cancelReasonList(): mixed
```

`v2/posting/fbs/cancel-reason/list`










***

### cancelPosting

Отменить отправление

```php
public cancelPosting(int $reasonId, string $reasonMessage, string $postingNumber): mixed
```

`v2/posting/fbs/cancel`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reasonId` | **int** | Идентификатор причиты отмены |
| `$reasonMessage` | **string** | Доп. информация об отмене |
| `$postingNumber` | **string** | Идентификатор отправления |





***

### addPostingProductsWeight

Добавить вес для весовых товаров

```php
public addPostingProductsWeight(array $items, string $postingNumber): mixed
```

`v2/posting/fbs/product/change`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$items` | **array** | Информация о товарах |
| `$postingNumber` | **string** | Идентификатор отправления |





***

### cancelPostingProducts

Отменить отправку некоторых товаров
в отправлении

```php
public cancelPostingProducts(int $reasonId, string $reasonMessage, array $items, string $postingNumber): mixed
```

`v2/posting/fbs/product/cancel`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reasonId` | **int** | Причина отмены товара |
| `$reasonMessage` | **string** | Доп. информация об отмене |
| `$items` | **array** | Товары |
| `$postingNumber` | **string** | Идентификатор отправления |





***

### postingsDelivering

Изменить статус отправлений на "доставляется"

```php
public postingsDelivering(string[] $postingNumbers): mixed
```

`v2/fbs/posting/delivering`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$postingNumbers` | **string[]** | Идентификаторы отправления |





***

### setPostingTrackNumber

Добавить трэк-номера на отправления

```php
public setPostingTrackNumber(array $trackingNumbers): mixed
```

`v2/fbs/posting/tracking-number/set`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$trackingNumbers` | **array** | Массив с параметрами id отправления -&gt; трэк-номер |





***

### postingsLastMile

Изменить статус отправлений на "последняя миля"

```php
public postingsLastMile(string[] $postingNumbers): mixed
```

`v2/fbs/posting/last-mile`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$postingNumbers` | **string[]** | Идентификаторы отправлений |





***

### postingsDelivered

Изменить статус отправлений на "доставлено"

```php
public postingsDelivered(string[] $postingNumbers): mixed
```

`v2/fbs/posting/delivered`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$postingNumbers` | **string[]** | Идентификаторы отправлений |





***

### postingsSentBySeller

Изменить статус на "отправлено продавцом"

```php
public postingsSentBySeller(array $postingNumbers): mixed
```

`v2/fbs/posting/sent-by-seller`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$postingNumbers` | **array** | Идентификаторы отправлений |





***

***
> Automatically generated on 2024-03-15

