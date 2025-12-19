<?php require 'partials/head.php' ?>
<?php require 'partials/header.php' ?>

<main>
    <h1>Notes</h1>

    <ul>
        <?php foreach ($notes as $note): ?>
            <li>
                <a href="/note?id=<?= $note['id'] ?>">
                    <?= htmlspecialchars($note['body']) ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</main>

<?php require 'partials/footer.php' ?>
<?php require 'partials/foot.php' ?>