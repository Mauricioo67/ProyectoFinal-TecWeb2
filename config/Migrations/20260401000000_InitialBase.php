<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class InitialBase extends BaseMigration
{
    public function change(): void
    {
        $table = $this->table('users');
        $table->addColumn('nombre', 'string', [
            'default' => null,
            'limit' => 250,
            'null' => true,
        ]);
        $table->addColumn('apellido', 'string', [
            'default' => null,
            'limit' => 250,
            'null' => true,
        ]);
        $table->addColumn('correo', 'string', [
            'default' => null,
            'limit' => 250,
            'null' => true,
        ]);
        $table->addColumn('password', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',
            'null' => false,
        ]);
        $table->create();
    }
}
