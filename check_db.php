<?php
require 'vendor/autoload.php';
use Cake\Datasource\ConnectionManager;

// Load config
require 'config/bootstrap.php';

$connection = ConnectionManager::get('default');
$results = $connection->execute('SELECT id, correo, id_rol FROM users')->fetchAll('assoc');

echo "USERS IN DATABASE:\n";
foreach ($results as $row) {
    echo "ID: " . $row['id'] . " | Correo: " . $row['correo'] . " | Rol: " . var_export($row['id_rol'], true) . "\n";
}
