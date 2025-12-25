<?php partial('head.php', ['title' => 'Edit Note']) ?>
<?php partial('header.php', []) ?>

<main>
    <h1>Edit note</h1>

    <form method="POST" action="/notes">
        <input type="hidden" name="_method" value="PATCH" />
        <input type="hidden" name="id" value="<?= $note['id'] ?>" />

        <label for="body">Body</label>

        <br />

        <textarea name="body" id="body" rows="10"
            cols="50"><?= htmlspecialchars($old['body'] ?? $note['body'] ?? '') ?></textarea>

        <?php if (isset($errors['body'])): ?>
            <p><?= $errors['body'] ?></p>
        <?php endif ?>

        <br />

        <button type="submit">Update</button>
    </form>
</main>

<?php partial('footer.php', []) ?>
<?php partial('foot.php', []) ?>