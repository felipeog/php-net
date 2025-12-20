<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/header.php') ?>

<main>
    <h1>Error</h1>

    <?= $code ? "<p>Error code: {$code}</p>" : '' ?>
</main>

<?php require base_path('views/partials/footer.php') ?>
<?php require base_path('views/partials/foot.php') ?>