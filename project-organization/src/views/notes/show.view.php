<?php partial('head.php', ['title' => 'Note']) ?>
<?php partial('header.php', []) ?>

<main>
    <h1>Note</h1>

    <p><?= nl2br(htmlspecialchars($note['body'])) ?></p>
</main>

<?php partial('footer.php', []) ?>
<?php partial('foot.php', []) ?>