<?php partial('head', ['title' => 'Home']) ?>
<?php partial('header', []) ?>

<main>
    <h1>Login</h1>

    <form method="POST" action="/session">
        <label for="email">Email</label>
        <br />
        <input type="email" name="email" id="email" value="<?= $old['email'] ?? '' ?>" />
        <?php if (isset($errors['email'])): ?>
            <br />
            <span><?= $errors['email'] ?></span>
        <?php endif ?>

        <br />
        <br />

        <label for="password">Password</label>
        <br />
        <input type="password" name="password" id="password" />
        <?php if (isset($errors['password'])): ?>
            <br />
            <span><?= $errors['password'] ?></span>
        <?php endif ?>

        <br />
        <br />

        <button type="submit">Log in</button>
    </form>
</main>

<?php partial('footer', []) ?>
<?php partial('foot', []) ?>