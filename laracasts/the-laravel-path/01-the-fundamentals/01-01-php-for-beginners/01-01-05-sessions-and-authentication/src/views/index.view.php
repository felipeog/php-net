<?php partial('head.php', ['title' => 'Home']) ?>
<?php partial('header.php', []) ?>

<main>
    <h1>Home</h1>

    <p>Hello, <?= $_SESSION['user']['email'] ?? 'Guest' ?>.</p>
</main>

<?php partial('footer.php', []) ?>
<?php partial('foot.php', []) ?>