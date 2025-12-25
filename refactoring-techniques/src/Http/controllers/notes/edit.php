<?php

use Core\App;
use Core\Database;
use Core\Response;
use Core\Session;

$db = App::resolve(Database::class);

$user = Session::get('user', []);
$user_id = $user['id'] ?? null;
$note_id = $_GET['id'] ?? null;
$note = $db->query('SELECT * FROM notes WHERE id = :note_id', [':note_id' => $note_id])->fetchOrFail();

authorize($note['user_id'] === $user_id, Response::FORBIDDEN);

$attributes = [
    'note' => $note,
    'errors' => Session::get('errors', []),
    'old' => Session::get('old', [])
];

view('notes/edit.view.php', $attributes);
