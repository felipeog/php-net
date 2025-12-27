<?php require 'partials/head.php' ?>
<?php require 'partials/header.php' ?>

<main>
    <h1>Note</h1>

    <p><?= nl2br(htmlspecialchars($note['body'])) ?></p>
</main>

<?php require 'partials/footer.php' ?>
<?php require 'partials/foot.php' ?>