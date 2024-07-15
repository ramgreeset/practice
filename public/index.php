<?php

define("MYAPP", true);

require_once '../funcs.php';

$title = 'My Blog : : Home';
$posts = [
    1 => [
        'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, quod!',
        'slug' => 'title-1'
    ],
    2 => [
        'title' => 'Title 2',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, quod!',
        'slug' => 'title-2'
    ],
    3 => [
        'title' => 'Title 3',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, quod!',
        'slug' => 'title-3'
    ],
    4 => [
        'title' => 'Title 4',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, quod!',
        'slug' => 'title-4'
    ],
];

$recent_posts = [
    1 => [
        'title' => 'An item',
        'slug' => lcfirst(str_replace(' ', '-', 'An item'))
    ],
    2 => [
        'title' => 'A second item',
        'slug' => lcfirst(str_replace(' ', '-', 'A second item'))
    ],
    3 => [
        'title' => 'A third item',
        'slug' => lcfirst(str_replace(' ', '-', 'A third item'))
    ],
    4 => [
        'title' => 'A fourth item',
        'slug' => lcfirst(str_replace(' ', '-', 'A fourth item'))
    ],

];

require_once '../resource/view/index.tpl.php';