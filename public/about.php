<?php

require_once '../funcs.php';

$title = 'My Blog : : About';
$post = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur cum dolorem eos facere perferendis quaerat recusandae repudiandae tempora vitae? Aliquid blanditiis deserunt dolorem et eveniet id illum itaque mollitia necessitatibus nemo neque, obcaecati porro quisquam, sit suscipit temporibus, voluptatem. Assumenda earum excepturi perspiciatis vel! Asperiores autem, beatae dignissimos ea eveniet harum illo ipsa libero minus nam nemo nostrum obcaecati odit omnis perspiciatis quae quia repellendus, sapiente temporibus ut vel, voluptate voluptates! Aspernatur cupiditate dicta distinctio ducimus ea earum et exercitationem explicabo laboriosam magni nam nostrum numquam pariatur, porro provident quam quas quasi quod rem reprehenderit rerum similique sint, suscipit!</p>';

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

require_once '../resource/view/about.tpl.php';