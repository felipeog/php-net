<?php require 'partials/head.php' ?>
<?php require 'partials/header.php' ?>

<main>
    <h1><?= htmlspecialchars($post['title']) ?></h1>
    <p><?= nl2br(htmlspecialchars($post['content'])) ?></p>
</main>

<?php require 'partials/footer.php' ?>
<?php require 'partials/foot.php' ?>