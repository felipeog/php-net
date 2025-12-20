<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/header.php') ?>

<main>
    <h1>Note</h1>

    <p><?= nl2br(htmlspecialchars($note['body'])) ?></p>
</main>

<?php require base_path('views/partials/footer.php') ?>
<?php require base_path('views/partials/foot.php') ?>