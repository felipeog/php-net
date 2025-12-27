<?php require 'partials/head.php' ?>
<?php require 'partials/header.php' ?>

<main>
    <h1>Create note</h1>

    <form method="POST" action="">
        <label for="body">Body</label>

        <br />

        <textarea name="body" id="body" rows="10" cols="50"><?= $_POST['body'] ?? '' ?></textarea>

        <?php if (isset($errors['body'])): ?>
            <p><?= $errors['body'] ?></p>
        <?php endif ?>

        <br />

        <button type="submit">Submit</button>
    </form>
</main>

<?php require 'partials/footer.php' ?>
<?php require 'partials/foot.php' ?>