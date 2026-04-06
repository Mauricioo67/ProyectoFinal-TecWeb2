<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Moneda Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $codigo
 * @property string $simbolo
 * @property string|null $pais
 * @property string|null $tasa_cambio
 * @property bool|null $activa
 * @property \Cake\I18n\DateTime|null $created
 */
class Moneda extends Entity
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
        'codigo' => true,
        'simbolo' => true,
        'pais' => true,
        'tasa_cambio' => true,
        'activa' => true,
        'created' => true,
    ];
}
