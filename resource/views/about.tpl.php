
<?php require_once VIEWS . '/inc/header.tpl.php';?>

    <main class="main py-3">

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <?= $post?>
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

<?php require_once VIEWS . '/inc/footer.tpl.php';?>
</body>
</html>