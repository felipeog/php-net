<?php require 'views/partials/head.php' ?>
<?php require 'views/partials/header.php' ?>

<main>
    <h1>Note</h1>

    <p><?= nl2br(htmlspecialchars($note['body'])) ?></p>
</main>

<?php require 'views/partials/footer.php' ?>
<?php require 'views/partials/foot.php' ?>