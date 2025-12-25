<?php partial('head', ['title' => 'Note']) ?>
<?php partial('header', []) ?>

<main>
    <h1>Note</h1>

    <p><?= nl2br(htmlspecialchars($note['body'])) ?></p>

    <br />

    <p><a href="/note/edit?id=<?= $note['id'] ?>">Edit</a></p>

    <br />

    <form method="POST">
        <input type="hidden" name="_method" value="DELETE" />
        <input type="hidden" name="id" value="<?= $note['id'] ?>" />
        <button type="submit">Delete</button>
    </form>
</main>

<?php partial('footer', []) ?>
<?php partial('foot', []) ?>