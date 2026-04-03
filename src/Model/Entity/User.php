<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Authentication\PasswordHasher\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $id
 * @property string|null $nombre
 * @property string|null $apellido
 * @property string|null $correo
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 * @property string|null $password
 * @property string|null $language
 * @property int|null $rol
 * @property string|null $estado
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'nombre' => true,
        'apellido' => true,
        'correo' => true,
        'created' => true,
        'modified' => true,
        'password' => true,
        'language' => true,
        'rol' => true,
        'estado' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected array $_hidden = [
        'password',
    ];

    /**
     * Hash password
     *
     * @param string $password Password to hash.
     * @return string|null
     */
    protected function _setPassword(string $password): ?string
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }

        return $password;
    }
}
