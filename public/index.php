<?php
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


?>
<!doctype html>

<html" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../src/css/style.css">
    <title>Practice</title>
</head>
<body>
<div class="wrapper">
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">PHPractice</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="main py-3">

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <?php foreach ($posts as $post): ?>

                            <div class="col-md-4">
                                <a href="$post/<?= $post['slug'] ?>" class="card mb-3"">
                                <img src="https://cdn.tripster.ru/thumbs2/f5a8c1fe-b128-11ed-9e63-2e5ef03bee8d.1220x600.jpeg"
                                     class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $post['title'] ?></h5>
                                    <p class="card-text"><?= $post['description'] ?></p>
                                </div>
                                </a>
                            </div>

                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Recent Posts</h3>

                    <ul class="list-group">
                        <?php foreach ($recent_posts as $recent_post): ?>
                            <li class="list-group-item">
                                <a href="<?= $recent_post['slug'] ?>">
                                    <?= $recent_post['title'] ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>

    </main>

    <footer class="footer p-3 bg-light text-center">
        <p>&copy; Copyright <?= date('Y') ?></p>
    </footer>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>