<?php
require 'vendor/autoload.php';
use Cake\Datasource\ConnectionManager;
$conn = ConnectionManager::get('default');
$tables = $conn->getSchemaCollection()->listTables();
echo implode(', ', $tables);
