<?php

use Core\App;
use Core\Database;
use Core\Response;
use Core\Session;

$db = App::resolve(Database::class);

$user = Session::get('user', []);
$user_id = $user['id'] ?? null;
$note_id = $_POST['id'] ?? null;

$select_query = 'SELECT * FROM notes WHERE id = :note_id';
$select_params = [':note_id' => $note_id];
$note = $db->query($select_query, $select_params)->fetchOrFail();

authorize($note['user_id'] === $user_id, Response::FORBIDDEN);

$delete_query = 'DELETE FROM notes WHERE id = :note_id';
$delete_params = [':note_id' => $note_id];
$db->query($delete_query, $delete_params);

redirect('/notes');
