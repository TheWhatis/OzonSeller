<?php
/**
 * Файл с интерфейсом сервиса
 *
 * PHP version 8
 *
 * @category Main
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */

namespace Whatis\OzonSeller;

use Whatis\OzonSeller\Enums\Permission;
use InvalidArgumentException;

/**
 * Интерфейс сервиса
 *
 * PHP version 8
 *
 * @category Main
 * @package  OzonSeller
 * @author   Whatis <anton-gogo@mail.ru>
 * @license  unlicense
 * @link     https://github.com/TheWhatis/OzonSeller
 */
class Permissions
{
    /**
     * Сформированная битмаска из
     * переданных разрешений
     *
     * @var int
     */
    protected int $bitmask;

    /**
     * Список переданных разрешений
     *
     * @var array<int, Permission>
     */
    protected array $permissions;

    /**
     * Иницилизация класса для
     * работы с разрешениями
     * токена
     *
     * @param Permission ...$permissions Разрешения
     */
    public function __construct(Permission ...$permissions)
    {
        $this->bitmask = static::createBitmask(...$permissions);
        $this->permissions = $permissions;
    }

    /**
     * Получить все разрешения
     *
     * @return array<int, Permission> Разрешения
     */
    public function get(): array
    {
        return $this->permissions;
    }

    /**
     * Проверить что одно из переданных
     * разрешенний установлено
     *
     * @param Permission ...$permissions Разрешения
     *
     * @return bool
     */
    public function has(Permission ...$permissions): bool
    {
        return (
            $this->bitmask & static::createBitmask(...$permissions)
        ) > 0;
    }

    /**
     * Проверить что все переданные
     * разрешения установлены
     *
     * @param Permission ...$permissions Разрешения
     *
     * @return bool
     */
    public function contains(Permission ...$permissions): bool
    {
        return (
            static::createBitmask(...$permissions) & ~$this->bitmask
        ) === 0;
    }

    /**
     * Установить новые разрешения
     *
     * @param Permission ...$permissions Разрешения
     *
     * @return void
     */
    public function set(Permission ...$permissions): void
    {
        foreach ($permissions as $permission) {
            $this->bitmask |= $permission->value;
        }
    }

    /**
     * Удалить разрешения из текущих
     *
     * @param Permission ...$permissions Разрешения
     *
     * @return void
     */
    public function delete(Permission ...$permissions): void
    {
        foreach ($permissions as $permission) {
            $this->bitmask &= ~$permission->value;
        }
    }

    /**
     * Проверить что имеются
     * все необходимые разрешения
     * в токене
     *
     * @param string $jwtToken Jwt Токен
     *
     * @return bool
     */
    public function hasByToken(string $jwtToken): bool
    {
        return (
            $this->bitmask & ~static::getJwtBitmask($jwtToken)
        ) === 0;
    }

    /**
     * Вывести ошибку о том, что передан
     * неверный jwt token
     *
     * @param string $token Токен
     *
     * @return never
     * @throw  InvalidArgumentException
     */
    private static function _throwInvalidToken(string $token): never
    {
        throw new InvalidArgumentException(
            sprintf(
                'The passed token is not a jwt token or has '
                    . 'an uncorrect format. Token: %s', $token
            )
        );
    }

    /**
     * Сгенерировать битмаску
     *
     * @param Permission ...$permissions Разрешения
     *
     * @return int Битмаска
     */
    public static function createBitmask(
        Permission ...$permissions
    ): int {
        $bitmask = 0;
        foreach ($permissions as $permission) {
            $bitmask |= $permission->value;
        }

        return $bitmask;
    }

    /**
     * Получить битмаску из токена
     *
     * @param string $jwtToken Токен
     *
     * @return int Битмаска
     * @throw  InvalidArgumentException
     */
    public static function getJwtBitmask(string $jwtToken): int
    {
        $parsed = explode('.', $jwtToken);

        if (is_null($parsed[1])) {
            static::_throwInvalidToken($jwtToken);
        }

        $payload = json_decode(base64_decode($parsed[1]), true);

        if (is_null($payload)
            && json_last_error() !== JSON_ERROR_NONE
        ) {
            static::_throwInvalidToken($jwtToken);
        }

        if (!array_key_exists('s', $payload)) {
            static::_throwInvalidToken($jwtToken);
        }

        return $payload['s'];
    }

    /**
     * Преобразовать в строку
     *
     * @return string
     */
    public function asString(): string
    {
        return implode(
            ', ', array_map(
                static function ($permission) {
                    return $permission->asString();
                }, $this->permissions
            )
        );
    }
}
