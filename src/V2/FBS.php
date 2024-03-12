<?php
/**
 * Файл с классом-сервисом для
 * работы с fbs
 *
 * PHP version 8
 *
 * @category V2
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */

namespace Whatis\OzonSeller\V2;

use Whatis\OzonSeller\Service\BaseService;
use Whatis\OzonSeller\Attribute\Mapping;

/**
 * Класс-сервис для работы
 * с fbs
 *
 * PHP version 8
 *
 * @category V2
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */
class FBS extends BaseService
{
    use FBS\PostingsTrait;

    /**
     * Основной путь до методов
     *
     * @var string
     */
    public string $path = 'v2/posting/fbs';

    /**
     * Другой путь до методов для отправлений
     *
     * @var string
     */
    public string $psPath = 'v2/fbs/posting';

    /**
     * Получить штрихкод для отгрузки
     * отправления
     *
     * `v2/posting/fbs/act/get-barcode`
     *
     * @param int $transId Идентификатор перевозки
     *
     * @return mixed
     */
    #[Mapping(':path/act/get-barcode')]
    public function getTransBarcode(int $transId): mixed
    {
        return $this->request('POST', "{$this->path}/act/get-barcode", [
            'id' => $transId
        ]);
    }

    /**
     * Получить штрихкод для отгрузки
     * отправления в текстовом виде
     *
     * `v2/posting/fbs/act/get-barcode/text`
     *
     * @param int $transId Идентификатор перевозки
     *
     * @return mixed
     */
    #[Mapping(':path/act/get-barcode/text')]
    public function getTextTransBarcode(int $transId): mixed
    {
        return $this->request('POST', "{$this->path}/act/get-barcode/text", [
            'id' => $transId
        ]);
    }

    /**
     * Получить список доступных
     * стран-изготовителей
     *
     * `v2/posting/fbs/product/country/list`
     *
     * @param string $search Фильтрация по строке
     *
     * @return mixed
     */
    #[Mapping(':path/product/country/list')]
    public function countryList(string $search = '')
    {
        return $this->request('POST', "{$this->path}/product/country/list", [
            'name_search' => $search
        ]);
    }

    /**
     * Добавить информацию о
     * стране-изготовителе товара
     *
     * `v2/posting/fbs/product/country/set`
     *
     * @param string $postingNumber Номер отправления
     * @param int    $productId     Идентификатор товара
     * @param string $countryIso    Двухбуквенный код страны в формате ISO-3166-1
     *
     * @return mixed
     */
    #[Mapping(':path/product/country/set')]
    public function countrySet(
        string $postingNumber,
        int $productId,
        string $countryIso
    ): mixed {
        return $this->request('POST', "{$this->path}/product/country/set", [
            'posting_number' => $postingNumber,
            'product_id' => $productId,
            'country_iso_code' => $countryIso
        ]);
    }

    /**
     * Подтвердить отгрузку и создать документы
     *
     * `v2/posting/fbs/act/create`
     *
     * @param int    $amount           Количество грузовых мест
     * @param int    $deliveryMethodId Идентификатор метода доставки
     * @param string $departureDate    Дата отгрузки
     *
     * @return mixed
     */
    #[Mapping(':path/act/create')]
    public function actCreate(
        int $amount,
        int $deliveryMethodId,
        string $departureDate
    ): mixed {
        return $this->request('POST', "{$this->path}/act/create", [
            'containers_count' => $amount,
            'delivery_method_id' => $deliveryMethodId,
            'departure_date' => $departureDate
        ]);
    }

    /**
     * Получить статус формирования штрихкода
     * для отгрузки и документов
     *
     * `v2/posting/fbs/act/check-status`
     *
     * @param int $actId Идентификатор задания на формирования документов
     *
     * @return mixed
     */
    #[Mapping(':path/act/check-status')]
    public function actBarcodeStatus(int $actId): mixed
    {
        return $this->request('POST', "{$this->path}/act/check-status", [
            'id' => $actId
        ]);
    }

    /**
     * Получить PDF с документами
     *
     * `v2/posting/fbs/act/get-pdf`
     *
     * @param int $actId идентификатор задания на формирования документов
     *
     * @return mixed
     */
    #[Mapping(':path/act/get-pdf')]
    public function actGetPdf(int $actId): mixed
    {
        return $this->request('POST', "{$this->path}/act/get-pdf", [
            'id' => $actId
        ]);
    }

    /**
     * Получить статус формирования накладной
     *
     * `v2/posting/fbs/digital/act/check-status`
     *
     * @param int $actId Идентификатор задания на формирования документов
     *
     * @return mixed
     */
    #[Mapping(':path/digital/act/check-status')]
    public function invoiceGenerationStatus(int $actId): mixed
    {
        return $this->request('POST', "{$this->path}/digital/act/check-status", [
            'id' => $actId
        ]);
    }

    /**
     * Получить лист отгрузки по перевозке
     *
     * `v2/posting/fbs/digital/act/get-pdf`
     *
     * @param int    $actId   Идентификатор задания на формирования документов
     * @param string $docType Тип сфорированного документа
     *
     * @return mixed
     */
    #[Mapping(':path/digital/act/get-pdf')]
    public function transShippingList(
        int $actId,
        string $docType = 'act_of_acceptance'
    ): mixed {
        return $this->request('POST', "{$this->path}/digital/act/get-pdf", [
            'id' => $actId,
            'doc_type' => $doctType
        ]);
    }

    /**
     * Получить этикетки для грузового места
     *
     * `v2/posting/fbs/act/get-container-labels`
     *
     * @param int $actId Идентификатор задания на формирования документов
     *
     * @return mixed
     */
    #[Mapping(':path/act/get-container-labels')]
    public function packageLabels(int $actId): mixed
    {
        return $this->request('POST', "{$this->path}/act/get-container-labels", [
            'id' => $actId
        ]);
    }

    /**
     * Список актов по отгрузкам
     *
     * `v2/posting/fbs/act/list`
     *
     * @param array $filter Фильтры
     * @param int   $limit  Максимальное количество актов в ответе
     *
     * @return mixed
     */
    #[Mapping(':path/act/list')]
    public function shipmentActList(array $filter, int $limit): mixed
    {
        return $this->request('POST', "{$this->path}/act/list", [
            'filter' => $filter,
            'limit' => $limit
        ]);
    }

    /**
     * Подписать документы об отгрузке
     *
     * `v2/posting/fbs/digital/act/document-sign`
     *
     * @param int    $shipmentId Идентификатор отгрузки
     * @param string $docType    Тип электронного документа
     *
     * @return mixed
     */
    #[Mapping(':path/digital/act/document-sign')]
    public function signShippingDoc(int $shipmentId, string $docType): mixed
    {
        return $this->request('POST', "{$this->path}/digital/act/document-sign", [
            'id' => $shipmentId,
            'doc_type' => $docType
        ]);
    }

    /**
     * Список отправлений в акте
     *
     * `v2/posting/fbs/act/get-postings`
     *
     * @param int $actId Идентификатор акта
     *
     * @return mixed
     */
    #[Mapping(':path/act/get-postings')]
    public function actPostingList(int $actId): mixed
    {
        return $this->request('POST', "{$this->path}/act/get-postings", [
            'id' => $actId
        ]);
    }
}
