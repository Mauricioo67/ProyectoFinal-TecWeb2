<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MonedasFixture
 */
class MonedasFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'codigo' => 'Lorem ip',
                'simbolo' => 'Lorem ip',
                'pais' => 'Lorem ipsum dolor sit amet',
                'tasa_cambio' => 1.5,
                'activa' => 1,
                'created' => 1775252171,
            ],
        ];
        parent::init();
    }
}
