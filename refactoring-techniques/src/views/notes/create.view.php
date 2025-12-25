<?php partial('head.php', ['title' => 'Create Note']) ?>
<?php partial('header.php', []) ?>

<main>
    <h1>Create note</h1>

    <form method="POST" action="/notes">
        <label for="body">Body</label>

        <br />

        <textarea name="body" id="body" rows="10" cols="50"><?= $old['body'] ?? '' ?></textarea>

        <?php if (isset($errors['body'])): ?>
            <p><?= $errors['body'] ?></p>
        <?php endif ?>

        <br />

        <button type="submit">Submit</button>
    </form>
</main>

<?php partial('footer.php', []) ?>
<?php partial('foot.php', []) ?>