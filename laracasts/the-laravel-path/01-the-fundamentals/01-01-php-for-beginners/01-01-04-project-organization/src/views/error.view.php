<?php partial('head.php', ['title' => 'Error']) ?>
<?php partial('header.php', []) ?>

<main>
    <h1>Error</h1>

    <?= $code ? "<p>Error code: {$code}</p>" : '' ?>
</main>

<?php partial('footer.php', []) ?>
<?php partial('foot.php', []) ?>