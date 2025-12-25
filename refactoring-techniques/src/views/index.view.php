<?php partial('head', ['title' => 'Home']) ?>
<?php partial('header', []) ?>

<main>
    <h1>Home</h1>

    <p>Hello, <?= $email ?? 'Guest' ?>.</p>
</main>

<?php partial('footer', []) ?>
<?php partial('foot', []) ?>