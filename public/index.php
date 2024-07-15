<?php

define('ROOT', dirname(__DIR__));
define('PUBLIC', ROOT . '/public');
define('CORE', ROOT . '/core');
define('APP', ROOT . '/app');
define('RESOURCE', ROOT . '/resource');
define('CONTROLLERS', APP . '/Controllers');
define('VIEWS', RESOURCE . '/views');
define('PATH', ROOT . 'http://practice');

require CORE . '/funcs.php';

require_once CONTROLLERS . '/index.php';
