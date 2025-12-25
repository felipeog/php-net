<?php

use Core\App;
use Core\Database;
use Core\Session;

$db = App::resolve(Database::class);

$user = Session::get('user', []);
$user_id = $user['id'] ?? null;
$notes = $db->query('SELECT * FROM notes WHERE user_id = :user_id', [
    ':user_id' => $user_id
])->fetchAll();

view('notes/index.view.php', ['notes' => $notes]);
