<?php require 'partials/head.php' ?>
<?php require 'partials/header.php' ?>

<main>
    <h1>Home</h1>

    <h2>Posts</h2>

    <section>
        <?php foreach ($posts as $post): ?>
            <article>
                <h3>
                    <a href="/post?id=<?= htmlspecialchars($post['id']) ?>">
                        <?= htmlspecialchars($post['title']) ?>
                    </a>
                </h3>
            </article>
        <?php endforeach; ?>
    </section>
</main>

<?php require 'partials/footer.php' ?>
<?php require 'partials/foot.php' ?>