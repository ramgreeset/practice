<?php
require dirname(__DIR__) . '/config/config.php';
require CORE . '/funcs.php';
require CORE . '/classes/Connect.php';


$db_config = require CONFIG . '/db_config.php';

try {
    $factory = new MySQLDatabaseFactory();
    $database = $factory->getConnection($db_config);
} catch (Exception $e) {
    echo "Произошла ошибка: " . $e->getMessage();
}

require CONFIG . '/routes.php';
require CORE . '/router.php';
