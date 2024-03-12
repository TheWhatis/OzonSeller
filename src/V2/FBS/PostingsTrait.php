<?php
/**
 * Файл с классом-сервисом для
 * работы с ценами
 *
 * PHP version 8
 *
 * @category FBS
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */

namespace Whatis\OzonSeller\V2\FBS;

use Whatis\OzonSeller\Attribute\Mapping;

/**
 * Трейт с реализацией методов для
 * класса-сервиса, для отправлений
 *
 * PHP version 8
 *
 * @category FBS
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */
trait PostingsTrait
{
    /**
     * Получить информацию отправления
     * по штрихкоду
     *
     * `v2/posting/fbs/get-by-barcode`
     *
     * @param string $barcode Идентификатор отправления
     *
     * @return mixed
     */
    #[Mapping(':path/get-by-barcode')]
    public function getByBarcode(string $barcode): mixed
    {
        return $this->request('POST', "{$this->path}/get-by-barcode", [
            'barcode' => $barcode,
        ]);
    }

    /**
     * Получить этикетки отправлений
     *
     * `v2/posting/fbs/package-label`
     *
     * @param array $postingNumbers Массив с идентификаторами отправлений
     *
     * @return mixed
     */
    #[Mapping(':path/package-label')]
    public function postingLabels(array $postingNumbers): mixed
    {
        return $this->request('POST', "{$this->path}/package-label", [
            'posting_number' => $postingNumbers
        ]);
    }

    /**
     * Открыть спор по отправлению
     *
     * `v2/posting/fbs/arbitration`
     *
     * @param array<string> $postingNumbers Массив с идентификаторами отправлений
     *
     * @return mixed
     */
    #[Mapping(':path/arbitration')]
    public function openPostingsArbitrations(array $postingNumbers)
    {
        return $this->request('POST', "{$this->path}/arbitration", [
            'posting_number' => $postingNumbers
        ]);
    }

    /**
     * Передать отправления к отгрузке
     *
     * `v2/posting/fbs/awaiting-delivery`
     *
     * @param array<string> $postingNumbers Массив с идентификаторами отправлений
     *
     * @return mixed
     */
    #[Mapping(':path/awaiting-delivery')]
    public function postingsAwaitingDelivery(array $postingNumbers): mixed
    {
        return $this->request('POST', "{$this->path}/awaiting-delivery", [
            'posting_number' => $postingNumbers
        ]);
    }

    /**
     * Получить причины отмены отправлений
     *
     * `v2/posting/fbs/cancel-reason/list`
     *
     * @return mixed
     */
    #[Mapping(':path/cancel-reason/list')]
    public function cancelReasonList(): mixed
    {
        return $this->request('POST', "{$this->path}/cancel-reason/list");
    }

    /**
     * Отменить отправление
     *
     * `v2/posting/fbs/cancel`
     *
     * @param int    $reasonId      Идентификатор причиты отмены
     * @param string $reasonMessage Доп. информация об отмене
     * @param string $postingNumber Идентификатор отправления
     *
     * @return mixed
     */
    #[Mapping(':path/cancel')]
    public function cancelPosting(
        int $reasonId,
        string $reasonMessage,
        string $postingNumber
    ): mixed {
        return $this->request('POST', "{$this->path}/cancel", [
            'cancel_reason_id' => $reasonId,
            'cancel_reason_message' => $reasonMessage,
            'posting_number' => $postingNumber
        ]);
    }

    /**
     * Добавить вес для весовых товаров
     *
     * `v2/posting/fbs/product/change`
     *
     * @param array  $items         Информация о товарах
     * @param string $postingNumber Идентификатор отправления
     *
     * @return mixed
     */
    #[Mapping(':path/product/change')]
    public function addPostingProductsWeight(
        array $items,
        string $postingNumber
    ): mixed {
        return $this->request('POST', "{$this->path}/product/change", [
            'items' => $items,
            'posting_number' => $postingNumber
        ]);
    }

    /**
     * Отменить отправку некоторых товаров
     * в отправлении
     *
     * `v2/posting/fbs/product/cancel`
     *
     * @param int    $reasonId      Причина отмены товара
     * @param string $reasonMessage Доп. информация об отмене
     * @param array  $items         Товары
     * @param string $postingNumber Идентификатор отправления
     *
     * @return mixed
     */
    #[Mapping(':path/product/cancel')]
    public function cancelPostingProducts(
        int $reasonId,
        string $reasonMessage,
        array $items,
        string $postingNumber
    ): mixed {
        return $this->request('POSt', "{$this->path}/product/cancel", [
            'cancel_reason_id' => $reasonId,
            'cancel_reason_message' => $reasonMessage,
            'items' => $items,
            'posting_number' => $postingNumber
        ]);
    }

    /**
     * Изменить статус отправлений на "доставляется"
     *
     * `v2/fbs/posting/delivering`
     *
     * @param array<string> $postingNumbers Идентификаторы отправления
     *
     * @return mixed
     */
    #[Mapping(':psPath/delivering')]
    public function postingsDelivering(array $postingNumbers): mixed
    {
        return $this->request('POST', "{$this->psPath}/delivering", [
            'posting_number' => $postingNumbers
        ]);
    }

    /**
     * Добавить трэк-номера на отправления
     *
     * `v2/fbs/posting/tracking-number/set`
     *
     * @param array $trackingNumbers Массив с параметрами id отправления -> трэк-номер
     *
     * @return mixed
     */
    #[Mapping(':psPath/tracking-number/set')]
    public function setPostingTrackNumber(array $trackingNumbers): mixed
    {
        return $this->request('POST', "{$this->psPath}/tracking-number/set", [
            'tracking_numbers' => $trackingNumbers
        ]);
    }

    /**
     * Изменить статус отправлений на "последняя миля"
     *
     * `v2/fbs/posting/last-mile`
     *
     * @param array<string> $postingNumbers Идентификаторы отправлений
     *
     * @return mixed
     */
    #[Mapping(':psPath/last-mile')]
    public function postingsLastMile(array $postingNumbers): mixed
    {
        return $this->request('POST', "{$this->psPath}/last-mile", [
            'posting_number' => $postingNumbers
        ]);
    }

    /**
     * Изменить статус отправлений на "доставлено"
     *
     * `v2/fbs/posting/delivered`
     *
     * @param array<string> $postingNumbers Идентификаторы отправлений
     *
     * @return mixed
     */
    #[Mapping(':psPath/delivered')]
    public function postingsDelivered(array $postingNumbers): mixed
    {
        return $this->request('POST', "{$this->psPath}/delivered", [
            'posting_number' => $postingNumbers
        ]);
    }

    /**
     * Изменить статус на "отправлено продавцом"
     *
     * `v2/fbs/posting/sent-by-seller`
     *
     * @param array $postingNumbers Идентификаторы отправлений
     *
     * @return mixed
     */
    #[Mapping(':psPath/sent-by-seller')]
    public function postingsSentBySeller(array $postingNumbers): mixed
    {
        return $this->request('POST', "{$this->psPath}/sent-by-seller", [
            'posting_number' => $postingNumbers
        ]);
    }
}
