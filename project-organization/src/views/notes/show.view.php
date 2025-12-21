<?php partial('head.php', ['title' => 'Note']) ?>
<?php partial('header.php', []) ?>

<main>
    <h1>Note</h1>

    <p><?= nl2br(htmlspecialchars($note['body'])) ?></p>

    <form method="POST">
        <input type="hidden" name="_method" value="DELETE" />
        <input type="hidden" name="id" value="<?= $note['id'] ?>" />

        <br />

        <button type="submit">Delete</button>
    </form>
</main>

<?php partial('footer.php', []) ?>
<?php partial('foot.php', []) ?>