<?php
require 'config/bootstrap.php';
use Cake\Datasource\ConnectionManager;

$db = ConnectionManager::get('default');
$schema = $db->getSchemaCollection()->describe('users');
echo "COLUMNS IN 'users' TABLE:\n";
foreach ($schema->columns() as $column) {
    echo "- " . $column . "\n";
}
