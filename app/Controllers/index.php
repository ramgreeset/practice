<?php

$title = 'My Blog : : Home';
$posts = $db->query("SELECT * FROM posts ORDER BY id DESC");

dd($posts);

$recent_posts = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT 5")->fetchAll();

require_once VIEWS . '/index.tpl.php';