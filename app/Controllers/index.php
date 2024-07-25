<?php

$title = 'My Blog : : Home';
$posts = $database->query("SELECT * FROM posts ORDER BY id DESC")->fetchAll();
//dd($posts);
$recent_posts = $database->query("SELECT * FROM posts ORDER BY id DESC LIMIT 5")->fetchAll();

require_once VIEWS . '/index.tpl.php';