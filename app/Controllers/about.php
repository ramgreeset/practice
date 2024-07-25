<?php
$title = 'My Blog : : About';
$post = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur cum dolorem eos facere perferendis quaerat recusandae repudiandae tempora vitae? Aliquid blanditiis deserunt dolorem et eveniet id illum itaque mollitia necessitatibus nemo neque, obcaecati porro quisquam, sit suscipit temporibus, voluptatem. Assumenda earum excepturi perspiciatis vel! Asperiores autem, beatae dignissimos ea eveniet harum illo ipsa libero minus nam nemo nostrum obcaecati odit omnis perspiciatis quae quia repellendus, sapiente temporibus ut vel, voluptate voluptates! Aspernatur cupiditate dicta distinctio ducimus ea earum et exercitationem explicabo laboriosam magni nam nostrum numquam pariatur, porro provident quam quas quasi quod rem reprehenderit rerum similique sint, suscipit!</p>';

$recent_posts = $database->query("SELECT * FROM posts ORDER BY id DESC LIMIT 5")->fetchAll();

require_once VIEWS . '/about.tpl.php';