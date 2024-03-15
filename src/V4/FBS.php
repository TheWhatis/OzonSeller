<?php
/**
 * Файл с классом-сервисом для
 * работы с fbs
 *
 * PHP version 8
 *
 * @category V4
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */

namespace Whatis\OzonSeller\V4;

use Whatis\OzonSeller\Service\BaseService;
use Whatis\OzonSeller\Attribute\Mapping;

/**
 * Класс-сервис для работы
 * с fbs
 *
 * PHP version 8
 *
 * @category V4
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */
class FBS extends BaseService
{
    /**
     * Основной путь до методов для
     * работы с экземплярами товаров
     *
     * @var string
     */
    public string $exPath = 'v4/fbs/posting/product/exemplar';

    /**
     * Основной путь до методов для
     * работы с отправленями
     *
     * @var string
     */
    public string $psPath = 'v4/posting/fbs';

    /**
     * Валидация кодов маркировки
     *
     * `v4/fbs/posting/product/exemplar/validate`
     *
     * @param string $postingNumber Идентификатор отправления
     * @param array  $products      Список товаров
     *
     * @return mixed
     */
    #[Mapping(':exPath/validate')]
    public function validateMarkCodes(string $postingNumber, array $products): mixed
    {
        return $this->request('POST', "{$this->exPath}/validate", [
            'posting_number' => $postingNumber,
            'products' => $products
        ]);
    }

    /**
     * Получить статус добавления экземпляров
     *
     * `v4/fbs/posting/product/exemplar/status`
     *
     * @param string $postingNumber Идентификатор отправления
     *
     * @return mixed
     */
    #[Mapping(':exPath/status')]
    public function exemplarStatus(string $postingNumber): mixed
    {
        return $this->request('POST', "{$this->exPath}/status", [
            'posting_number' => $postingNumber
        ]);
    }

    /**
     * Собрать заказ
     *
     * `v4/posting/fbs/ship`
     *
     * @param string $postingNumber Идентификатор отправления
     * @param array  $packages      Список упаковок отправлений
     * @param array  $with          Доп. информация
     *
     * @return mixed
     */
    #[Mapping(':psPath/ship')]
    public function collectPosting(
        string $postingNumber,
        array $packages,
        array $with = []
    ): mixed {
        return $this->request('POST', "{$this->psPath}/ship", [
            'packages' => $packages,
            'posting_number' => $postingNumber,
            'with' => $with
        ]);
    }

    /**
     * Частичная сборка отправления
     *
     * `v4/posting/fbs/ship/package`
     *
     * @param string $postingNumber Идентификатор отправления
     * @param array  $products      Товары
     *
     * @return mixed
     */
    #[Mapping(':exPath/ship/package')]
    public function partCollectPosting(string $postingNumber, array $products): mixed
    {
        return $this->request('POST', "{$this->psPath}/ship/package", [
            'posting_number' => $postingNumber,
            'products' => $products
        ]);
    }
}
