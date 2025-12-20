<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/header.php') ?>

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

<?php require base_path('views/partials/footer.php') ?>
<?php require base_path('views/partials/foot.php') ?>