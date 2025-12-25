<?php

use Core\App;
use Core\Database;
use Core\Response;
use Core\Session;

$db = App::resolve(Database::class);

$user = Session::get('user', []);
$user_id = $user['id'] ?? null;
$note_id = $_POST['id'] ?? null;
$note = $db->query('SELECT * FROM notes WHERE id = :note_id', [':note_id' => $note_id])->fetchOrFail();

authorize($note['user_id'] === $user_id, Response::FORBIDDEN);

$db->query('DELETE FROM notes WHERE id = :note_id', [':note_id' => $note_id]);

redirect('/notes');
