<?php
declare(strict_types=1);

use Migrations\BaseSeed;
use Authentication\PasswordHasher\DefaultPasswordHasher;

class UsersSeed extends BaseSeed
{
    public function run(): void
    {
        $hasher = new DefaultPasswordHasher();
        $password = $hasher->hash('Admin123');

        $data = [
            [
                'nombre' => 'Admin',
                'apellido' => 'General',
                'correo' => 'admin@example.com',
                'password' => $password,
                'language' => 'es',
                'id_rol' => 1,
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre' => 'Mauricio',
                'apellido' => 'User',
                'correo' => 'mauricio@example.com',
                'password' => $hasher->hash('Mauricio123'),
                'language' => 'es',
                'id_rol' => 2,
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
