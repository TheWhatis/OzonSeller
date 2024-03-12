<?php
/**
 * Файл с классом-сервисом для
 * работы с rfbs
 *
 * php version 8
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
 * с rfbs
 *
 * php version 8
 *
 * @category V2
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */
class RFBS extends BaseService
{
    /**
     * Основной путь до методов для
     * возвратов из rfbs
     *
     * @var string
     */
    public string $retPath = 'v2/returns/rfbs';

    /**
     * Список заявок на возврат
     *
     * `v2/returns/rfbs/list`
     *
     * @param array $filter Фильтры
     * @param int   $limit  Количество возвращаемых значений
     * @param int   $lastId Параметр пагинации (идентификатор возврата)
     *
     * @return mixed
     */
    #[Mapping(':retPath/list')]
    public function returnList(array $filter, int $limit, int $lastId = 0): mixed
    {
        return $this->request('POST', "{$this->retPath}", [
            'filter' => $filter,
            'limit' => $limit,
            'last_id' => $lastId
        ]);
    }

    /**
     * Информация о зоявке на возврат
     *
     * `v2/returns/rfbs/get`
     *
     * @param int $returnId Идентификатор возврата
     *
     * @return mixed
     */
    #[Mapping(':retPath/get')]
    public function getReturn(int $returnId): mixed
    {
        return $this->request('POST', "{$this->retPath}/get", [
            'return_id' => $returnId
        ]);
    }

    /**
     * Отклонить заявку на возврат
     *
     * `v2/returns/rfbs/reject`
     *
     * @param int    $returnId Идентификатор возврата
     * @param int    $reasonId Идентификато причины возврата
     * @param string $comment  Комментарий
     *
     * @return mixed
     */
    #[Mapping(':retPath/reject')]
    public function rejectReturn(
        int $returnId,
        int $reasonId,
        string $comment = ''
    ): mixed {
        return $this->request('POST', "{$this->retPath}/reject", [
           'return_id' => $returnId,
           'rejection_reason_id' => $reasonId,
           'comment' => $comment
        ]);
    }

    /**
     * Вернуть часть стоимости возврата
     *
     * `v2/returns/rfbs/compensate`
     *
     * @param int    $returnId Идентификатор возврата
     * @param string $amount   Сумма компенсации
     *
     * @return mixed
     */
    #[Mapping(':retPath/compensate')]
    public function compensate(int $returnId, string $amount): mixed
    {
        return $this->request('POST', "{$this->retPath}/compensate", [
            'return_id' => $returnId,
            'compensation_amount' => $amount
        ]);
    }

    /**
     * Одобрить заявку на возврат
     *
     * `v2/returns/rfbs/verify`
     *
     * @param int    $returnId Идентификатор возврата
     * @param string $method   Способ возврата товара
     *
     * @return mixed
     */
    #[Mapping(':retPath/verify')]
    public function verifyReturn(int $returnId, string $method): mixed
    {
        return $this->request('POST', "{$this->retPath}/verify", [
            'return_id' => $returnId,
            'return_method_description' => $method
        ]);
    }

    /**
     * Подтвердить получение товара на проверку
     *
     * `v2/returns/rfbs/receive-return`
     *
     * @param int $returnId Идентфикатор возврата
     *
     * @return mixed
     */
    #[Mapping(':retPath/receive-return')]
    public function receiveReturn(int $returnId): mixed
    {
        return $this->request('POST', "{$this->retPath}/receive-return", [
            'return_id' => $returnId
        ]);
    }

    /**
     * Вернуть деньги покупателю
     *
     * `v2/returns/rfbs/return-money`
     *
     * @param int $returnId      Идентификатор возврата
     * @param int $backWayAmount Сумма, возвращаемая покупателю за пересылку товара
     *
     * @return mixed
     */
    #[Mapping(':retPath/return-money')]
    public function fullCompensate(int $returnId, int $backWayAmount): mixed
    {
        return $this->request('POST', "{$this->retPath}/return-money", [
            'return_id' => $returnId,
            'return_for_back_way' => $backWayAmount
        ]);
    }
}
