
***

# Documentation



This is an automatically generated documentation for **Documentation**.


## Namespaces


### \Whatis\OzonSeller

#### Classes

| Class | Description |
|-------|-------------|
| [`ServiceCompositor`](./classes/Whatis/OzonSeller/ServiceCompositor.md) | Класс-компановщик для сервисов|
| [`ServiceManager`](./classes/Whatis/OzonSeller/ServiceManager.md) | Класс для управления<br />классами-сервисами<br />для ozon seller api|
| [`Utils`](./classes/Whatis/OzonSeller/Utils.md) | Класс с вспомогательными методами|




### \Whatis\OzonSeller\Attribute

#### Classes

| Class | Description |
|-------|-------------|
| [`Mapping`](./classes/Whatis/OzonSeller/Attribute/Mapping.md) | Атрибут для установки пути<br />до api ресурса|




### \Whatis\OzonSeller\Exceptions

#### Classes

| Class | Description |
|-------|-------------|
| [`ServiceAlreadyExists`](./classes/Whatis/OzonSeller/Exceptions/ServiceAlreadyExists.md) | Исключение, возникающее когда<br />сервис уже существует|
| [`ServiceNotFound`](./classes/Whatis/OzonSeller/Exceptions/ServiceNotFound.md) | Исключение, возникающее когда<br />сервиса не существует|




### \Whatis\OzonSeller\Formatters

#### Classes

| Class | Description |
|-------|-------------|
| [`ArrayFormatter`](./classes/Whatis/OzonSeller/Formatters/ArrayFormatter.md) | Форматировщик тела ответа,<br />чтобы получить массив|
| [`BaseFormatter`](./classes/Whatis/OzonSeller/Formatters/BaseFormatter.md) | Абстракный класс форматировщика json<br />для ответов и запросов от api, с<br />реализацией основных методов|
| [`StdClassFormatter`](./classes/Whatis/OzonSeller/Formatters/StdClassFormatter.md) | Форматировщик тела ответа,<br />чтобы получить stdClass|


#### Traits

| Trait | Description |
|-------|-------------|
| [`MultiEncodeTrait`](./classes/Whatis/OzonSeller/Formatters/MultiEncodeTrait.md) | Трейт с реализованным методом<br />для закодирования переданных данных<br />в string json или StreamInterface|
| [`WithContextTrait`](./classes/Whatis/OzonSeller/Formatters/WithContextTrait.md) | Трейт, с реализованным методом<br />для установки контекста<br />выполнения форматировщика|



#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`IJsonFormatter`](./classes/Whatis/OzonSeller/Formatters/IJsonFormatter.md) | Интерфейс форматировщика ответа и запроса<br />от api, чтобы получить определённый<br />формат данных|



### \Whatis\OzonSeller\Http

#### Classes

| Class | Description |
|-------|-------------|
| [`BaseClient`](./classes/Whatis/OzonSeller/Http/BaseClient.md) | Абстрактный класс клиента<br />для api|
| [`Client`](./classes/Whatis/OzonSeller/Http/Client.md) | Основной класс клиента<br />ozon seller api|
| [`Payload`](./classes/Whatis/OzonSeller/Http/Payload.md) | Класс полезной нагрузки<br />для создания запросов из<br />клиента `IClient`|


#### Traits

| Trait | Description |
|-------|-------------|
| [`TClient`](./classes/Whatis/OzonSeller/Http/TClient.md) | Трейт, реализующий `IClient`|



#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`IClient`](./classes/Whatis/OzonSeller/Http/IClient.md) | Интерфейс клиента<br />для ozon seller api|



### \Whatis\OzonSeller\Package

#### Classes

| Class | Description |
|-------|-------------|
| [`BasePackage`](./classes/Whatis/OzonSeller/Package/BasePackage.md) | Файл с абстрактным классом для<br />пакета (с реализацией основных<br />методов)|
| [`DefaultPackage`](./classes/Whatis/OzonSeller/Package/DefaultPackage.md) | Пакет с основными сервисами библиотеки|



#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`IPackage`](./classes/Whatis/OzonSeller/Package/IPackage.md) | Интерфейс для реализации<br />пакетов сервисов|



### \Whatis\OzonSeller\Service

#### Classes

| Class | Description |
|-------|-------------|
| [`BaseService`](./classes/Whatis/OzonSeller/Service/BaseService.md) | Абстрактный класс сервиса<br />для ozon seller api|
| [`Payload`](./classes/Whatis/OzonSeller/Service/Payload.md) | Класс полезной нагрузки<br />для создания запросов из<br />сервиса `BaseService`|


#### Traits

| Trait | Description |
|-------|-------------|
| [`TService`](./classes/Whatis/OzonSeller/Service/TService.md) | Трейт с реализацией<br />интерфейса `IService`|



#### Interfaces

| Interface | Description |
|-----------|-------------|
| [`IService`](./classes/Whatis/OzonSeller/Service/IService.md) | Интерфейс сервиса|



### \Whatis\OzonSeller\V1

#### Classes

| Class | Description |
|-------|-------------|
| [`FBS`](./classes/Whatis/OzonSeller/V1/FBS.md) | Класс-сервис для работы<br />с fbs|
| [`Prices`](./classes/Whatis/OzonSeller/V1/Prices.md) | Класс-сервис для работы<br />с ценами|
| [`Stocks`](./classes/Whatis/OzonSeller/V1/Stocks.md) | Класс-сервис для работы<br />с остатками|
| [`Warehouse`](./classes/Whatis/OzonSeller/V1/Warehouse.md) | Класс-сервис для работы<br />со складами|




### \Whatis\OzonSeller\V2

#### Classes

| Class | Description |
|-------|-------------|
| [`FBS`](./classes/Whatis/OzonSeller/V2/FBS.md) | Класс-сервис для работы<br />с fbs|
| [`RFBS`](./classes/Whatis/OzonSeller/V2/RFBS.md) | Класс-сервис для работы<br />с rfbs|
| [`Stocks`](./classes/Whatis/OzonSeller/V2/Stocks.md) | Класс-сервис для работы<br />с остатками|




### \Whatis\OzonSeller\V2\FBS



#### Traits

| Trait | Description |
|-------|-------------|
| [`PostingsTrait`](./classes/Whatis/OzonSeller/V2/FBS/PostingsTrait.md) | Трейт с реализацией методов для<br />класса-сервиса, для отправлений|




### \Whatis\OzonSeller\V3

#### Classes

| Class | Description |
|-------|-------------|
| [`FBS`](./classes/Whatis/OzonSeller/V3/FBS.md) | Класс-сервис для работы<br />с fbs|
| [`Stocks`](./classes/Whatis/OzonSeller/V3/Stocks.md) | Класс-сервис для работы<br />с остатками|




### \Whatis\OzonSeller\V4

#### Classes

| Class | Description |
|-------|-------------|
| [`FBS`](./classes/Whatis/OzonSeller/V4/FBS.md) | Класс-сервис для работы<br />с fbs|
| [`Prices`](./classes/Whatis/OzonSeller/V4/Prices.md) | Класс-сервис для работы<br />с ценами|




### \Whatis\OzonSeller\V5

#### Classes

| Class | Description |
|-------|-------------|
| [`FBS`](./classes/Whatis/OzonSeller/V5/FBS.md) | Класс-сервис для работы<br />с fbs|




***
> Automatically generated on 2024-03-15
