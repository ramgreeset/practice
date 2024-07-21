<?php

require dirname(__DIR__) . '/config/config.php';
require CORE . '/funcs.php';
require CORE . '/classes/Db.php';

$db_config = require CONFIG . '/database.php';
$db = new Db($db_config);

require CONFIG . '/routes.php';
require CORE . '/router.php';
