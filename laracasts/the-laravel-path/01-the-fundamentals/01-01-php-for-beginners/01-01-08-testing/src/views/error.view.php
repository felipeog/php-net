<?php partial('head', ['title' => 'Error']) ?>
<?php partial('header', []) ?>

<main>
    <h1>Error</h1>

    <?= $code ? "<p>Error code: {$code}</p>" : '' ?>
</main>

<?php partial('footer', []) ?>
<?php partial('foot', []) ?>