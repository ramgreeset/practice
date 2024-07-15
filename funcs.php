<?php

defined("MYAPP") or die('Пшол атседа');
function dump($data){
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

function dd($data){
    dump($data);
    die;
}