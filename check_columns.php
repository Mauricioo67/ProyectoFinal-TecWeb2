<?php
require 'vendor/autoload.php';
use Cake\Datasource\ConnectionManager;

$conn = ConnectionManager::get('default');
$columns = $conn->getSchemaCollection()->describe('users')->columns();
echo implode(', ', $columns);
