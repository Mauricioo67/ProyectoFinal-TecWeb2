<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class AddLanguageAndRoleToUsers extends BaseMigration
{
    public function change(): void
    {
        $table = $this->table('users');
        $table->addColumn('language', 'string', [
            'default' => 'es',
            'limit' => 10,
            'null' => true,
        ]);
        $table->addColumn('id_rol', 'integer', [
            'default' => 2, // 1: Admin, 2: User
            'limit' => 11,
            'null' => false,
        ]);
        $table->update();
    }
}
