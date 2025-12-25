<?php

use Core\App;
use Core\Database;
use Core\Response;
use Core\Session;

$db = App::resolve(Database::class);

$user = Session::get('user', []);
$user_id = $user['id'] ?? null;
$note_id = $_GET['id'] ?? null;

$query = 'SELECT * FROM notes WHERE id = :note_id';
$params = [':note_id' => $note_id];
$note = $db->query($query, $params)->fetchOrFail();

authorize($note['user_id'] === $user_id, Response::FORBIDDEN);
view('notes/show.view.php', ['note' => $note]);
