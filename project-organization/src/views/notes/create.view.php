<?php require 'views/partials/head.php' ?>
<?php require 'views/partials/header.php' ?>

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

<?php require 'views/partials/footer.php' ?>
<?php require 'views/partials/foot.php' ?>