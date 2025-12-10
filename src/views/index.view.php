<?php require 'partials/head.php' ?>
<?php require 'partials/header.php' ?>

<main>
    <h1>Home</h1>

    <section>
        <?php foreach ($posts as $post): ?>
            <article>
                <h2><?= htmlspecialchars($post['title']) ?></h2>
                <p><?= nl2br(htmlspecialchars($post['content'])) ?></p>
            </article>
        <?php endforeach; ?>
    </section>
</main>

<?php require 'partials/footer.php' ?>
<?php require 'partials/foot.php' ?>