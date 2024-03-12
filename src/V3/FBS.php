<?php
/**
 * Файл с классом-сервисом для
 * работы с fbs
 *
 * PHP version 8
 *
 * @category V3
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */

namespace Whatis\OzonSeller\V3;

use Whatis\OzonSeller\Service\BaseService;
use Whatis\OzonSeller\Attribute\Mapping;

/**
 * Класс-сервис для работы
 * с fbs
 *
 * PHP version 8
 *
 * @category V3
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/wb-api-skeleton
 */
class FBS extends BaseService
{
    /**
     * Основной путь до методов
     *
     * @var string
     */
    public string $path = 'v3/posting/fbs';

    /**
     * Список необработанных отправлений
     *
     * `v3/posting/fbs/unfulfilled/list`
     *
     * @param array $data Данные для работы с методом
     *
     * @return mixed
     */
    #[Mapping(':path/unfulfilled/list')]
    public function unfulfilled(array $data): mixed
    {
        return $this->request('POST', "{$this->path}/unfulfilled/list", $data);
    }

    /**
     * Список отправлений
     *
     * `v3/posting/fbs/list`
     *
     * @param array $data Данные для работы с методом
     *
     * @return mixed
     */
    #[Mapping(':path/list')]
    public function list(array $data): mixed
    {
        return $this->request('POST', "{$this->path}/list", $data);
    }

    /**
     * Получить отправление по идентификатору
     *
     * `v3/posting/fbs/get`
     *
     * @param string $postingNumber Идентификатор отправления
     * @param array  $with          Доп. поля, которые нужно добавить в ответ
     *
     * @return mixed
     */
    #[Mapping(':path/get')]
    public function getByid(string $postingNumber, array $with = []): mixed
    {
        return $this->request('POST', "{$this->path}/get", [
            'posting_number' => $postingNumber,
            'with' => $with
        ]);
    }

    /**
     * Указать количество коробок для
     * мультикоробочных отправлений
     *
     * `v3/posting/multiboxqty/set`
     *
     * @param string $postingNumber Идентификатор отправления
     * @param int    $quantity      Количество коробок
     *
     * @return mixed
     */
    #[Mapping('v3/posting/multiboxqty/set')]
    public function postingQuantityBoxes(string $postingNumber, int $quantity): mixed
    {
        return $this->request('POST', 'v3/posting/multiboxqty/set', [
            'posting_number' => $postingNumber,
            'multi_box_qty' => $quantity
        ]);
    }

    /**
     * Получить информацию о возвратах fbs
     *
     * `v3/returns/company/fbs`
     *
     * @param array $filter Фильтры
     * @param int   $limit  Количество значений в ответе
     * @param int   $lastId Параметр пагинации (идентификатор возврата)
     *
     * @return mixed
     */
    #[Mapping('v3/returns/company/fbs')]
    public function returns(array $filter, int $limit, int $lastId = 0): mixed
    {
        return $this->request('POST', 'v3/returns/company/fbs', [
            'filter' => $filter,
            'limit' => $limit,
            'last_id' => $lastId
        ]);
    }
}
