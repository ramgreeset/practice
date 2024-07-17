<?php

define('ROOT', dirname(__DIR__));
define('PUBLIC', ROOT . '/public');
define('CORE', ROOT . '/core');
define('APP', ROOT . '/app');
define('RESOURCE', ROOT . '/resource');
define('CONTROLLERS', APP . '/Controllers');
define('VIEWS', RESOURCE . '/views');
define('PATH', 'http://practice');

require CORE . '/funcs.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');

if ($uri === '') {
    require_once CONTROLLERS . '/index.php';
} elseif ($uri === 'about') {
    require_once CONTROLLERS . '/about.php';
}else {
    abort();
}
