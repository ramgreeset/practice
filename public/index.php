<?php
require dirname(__DIR__) . '/config/config.php';
require CORE . '/funcs.php';
require CORE . '/classes/Connect.php';


$db_config = require CONFIG . '/db_config.php';
$database = new Connect($db_config);

require CONFIG . '/routes.php';
require CORE . '/router.php';
