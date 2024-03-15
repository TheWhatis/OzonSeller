<?php
/**
 * Файл с классом-сервисом для
 * работы с fbs
 *
 * PHP version 8
 *
 * @category V1
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */

namespace Whatis\OzonSeller\V1;

use Whatis\OzonSeller\Service\BaseService;
use Whatis\OzonSeller\Attribute\Mapping;

/**
 * Класс-сервис для работы
 * с fbs
 *
 * PHP version 8
 *
 * @category V1
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */
class FBS extends BaseService
{
    /**
     * Основной путь до методов
     *
     * @var string
     */
    public string $path = 'v1/posting/fbs';

    /**
     * Получить ограничения пункта приёма
     *
     * `v1/posting/fbs/restrictions`
     *
     * @param string $postingNumber Идентификатор отправления
     *
     * @return mixed
     */
    #[Mapping(':path/restrictions')]
    public function postingRestrictions(string $postingNumber): mixed
    {
        return $this->request('POST', "{$this->path}/restrictions", [
            'posting_number' => $postingNumber
        ]);
    }

    /**
     * Получить список доступных перевозок
     *
     * `v1/posting/carriage-available/list`
     *
     * @param int    $methodId      Фильтр по методу доставки
     * @param string $departureDate Дата отгрузки
     *
     * @return mixed
     */
    #[Mapping('v1/posting/carriage-available/list')]
    public function carriageAvailableList(int $methodId, string $departureDate): mixed
    {
        return $this->request('POST', 'v1/posting/carriage-available/list', [
            'delivery_method_id' => $methodId,
            'departure_date' => $departureDate
        ]);
    }

    /**
     * Метод для создания задания на асинхронное
     * создание этикеток
     *
     * `v1/posting/fbs/package-label/create`
     *
     * @param array<string> $postingNumbers Идентификаторы отправлений
     *
     * @return mixed
     */
    #[Mapping(':path/package-label/create')]
    public function createPostingsLabel(array $postingNumbers): mixed
    {
        return $this->request('POST', "{$this->path}/package-label/create", [
           'posting_number' => $postingNumbers
        ]);
    }

    /**
     * Получить данные задания на
     * формирование этикеток
     *
     * `v1/posting/fbs/package-label/get`
     *
     * @param int $taskId Идентификатор задания
     *
     * @return mixed
     */
    #[Mapping(':path/package-label/get')]
    public function getCreateTaskPostingsLabel(int $taskId): mixed
    {
        return $this->request('POST', "{$this->path}/package-label/get", [
            'task_id' => $taskId
        ]);
    }

    /**
     * Получить причины отмены отправлений
     *
     * `v1/posting/fbs/cancel-reason`
     *
     * @param array $postingNumbers Идентификаторы отправлений
     *
     * @return mixed
     */
    #[Mapping(':path/cancel-reason')]
    public function cancelReasons(array $postingNumbers): mixed
    {
        return $this->request('POST', "{$this->path}/cancel-reason", [
            'related_posting_numbers' => $postingNumbers
        ]);
    }

    /**
     * Получить доступные даты для переноса доставки
     *
     * `v1/posting/fbs/timeslot/change-restrictions`
     *
     * @param string $postingNumber Идентификатор отправления
     *
     * @return mixed
     */
    #[Mapping(':path/timeslot/change-restrictions')]
    public function postingAvailableTimeslot(string $postingNumber): mixed
    {
        return $this->request('POST', "{$this->path}/timeslot/change-restrictions", [
            'posting_number' => $postingNumber
        ]);
    }

    /**
     * Перенести дату доставки
     *
     * `v1/posting/fbs/timeslot/set`
     *
     * @param array  $timeslot      Новый период для даты доставки
     * @param string $postingNumber Идентификатор отправления
     *
     * @return mixed
     */
    #[Mapping(':path/timeslot/set')]
    public function setPostingTimeslot(array $timeslot, string $postingNumber): mixed
    {
        return $this->request('POST', "{$this->path}/timeslot/set", [
            'new_timeslot' => $timeslot,
            'posting_number' => $postingNumber
        ]);
    }

    /**
     * Таможенные декларации ETGB
     *
     * `v1/posting/global/etgb`
     *
     * @param array $date Дата
     *
     * @return mixed
     */
    #[Mapping('v1/posting/global/etgb')]
    public function etgb(array $date): mixed
    {
        return $this->request('POST', 'v1/posting/global/etgb', [
            'date' => $date
        ]);
    }
}
