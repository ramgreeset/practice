<?php require_once VIEWS . '/inc/header.tpl.php'; ?>

<main class="main py-3">

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">

                    <?php foreach ($posts as $post): ?>

                        <div class="col-md-4">
                            <a href="post?id=<?= $post['id'] ?>" class="card mb-3"">
                            <img src="https://cdn.tripster.ru/thumbs2/f5a8c1fe-b128-11ed-9e63-2e5ef03bee8d.1220x600.jpeg"
                                 class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $post['title'] ?></h5>
                                <p class="card-text"><?= $post['content'] ?></p>
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
                            <a href="post/?id=<?= $recent_post['id'] ?>">
                                <?= $recent_post['title'] ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>

</main>

<?php require_once VIEWS . '/inc/footer.tpl.php'; ?>

</body>
</html>