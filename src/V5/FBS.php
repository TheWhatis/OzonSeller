<?php
/**
 * Файл с классом-сервисом для
 * работы с fbs
 *
 * PHP version 8
 *
 * @category V5
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */

namespace Whatis\OzonSeller\V5;

use Whatis\OzonSeller\Service\BaseService;
use Whatis\OzonSeller\Attribute\Mapping;

/**
 * Класс-сервис для работы
 * с fbs
 *
 * PHP version 8
 *
 * @category V5
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */
class FBS extends BaseService
{
    /**
     * Основной путь до методов для
     * работы с экземплярами товаров
     *
     * @var string
     */
    public string $exPath = 'v5/fbs/posting/product/exemplar';

    /**
     * Проверить и сохранить данные экземпляров
     *
     * `v5/fbs/posting/product/exemplar/set`
     *
     * @param string $postingNumber Идентификатор отправления
     * @param array  $products      Список товаров
     * @param int    $boxQuantity   Количество коробок, в которые упакован товар
     *
     * @return mixed
     */
    #[Mapping(':exPath/set')]
    public function exemplarSet(
        string $postingNumber,
        array $products,
        int $boxQuantity = 0
    ): mixed {
        return $this->request('POST', "{$this->exPath}/set", [
            'posting_number' => $postingNumber,
            'products' => $products,
            'mutli_box_qty' => $boxQuantity
        ]);
    }

    /**
     * Получить данные созданных экземлпяров
     *
     * `v5/fbs/posting/product/exemplar/create-or-get`
     *
     * @param string $postingNumber Идентификатор отправления
     *
     * @return mixed
     */
    #[Mapping(':exPath/create-or-get')]
    public function exemplars(string $postingNumber): mixed
    {
        return $this->request('POST', "{$this->exPath}/create-or-get", [
            'posting_number' => $postingNumber
        ]);
    }
}
