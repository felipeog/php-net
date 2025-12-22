<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$hardcodedUserId = 1;
$notes = $db->query('SELECT * FROM notes WHERE user_id = :user_id', [
    ':user_id' => $hardcodedUserId
])->fetchAll();

view('notes/index.view.php', ['notes' => $notes]);
