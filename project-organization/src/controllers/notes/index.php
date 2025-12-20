<?php

$notes = $db->query('SELECT * FROM notes WHERE user_id = :user_id', [
    ':user_id' => $hardcodedUserId
])->fetchAll();

view('notes/index.view.php', ['notes' => $notes]);
