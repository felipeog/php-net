<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$user_id = $user_id = $_SESSION['user']['id'] ?? null;
$notes = $db->query('SELECT * FROM notes WHERE user_id = :user_id', [
    ':user_id' => $user_id
])->fetchAll();

view('notes/index.view.php', ['notes' => $notes]);
