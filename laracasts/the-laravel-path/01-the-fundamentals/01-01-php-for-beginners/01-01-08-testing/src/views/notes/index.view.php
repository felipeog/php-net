<?php partial('head', ['title' => 'Notes']) ?>
<?php partial('header', []) ?>

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

<?php partial('footer', []) ?>
<?php partial('foot', []) ?>