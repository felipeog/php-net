<?php

use Core\App;
use Core\Database;
use Core\Response;
use Core\Session;
use Http\Forms\NoteForm;

$db = App::resolve(Database::class);

$user = Session::get('user', []);
$user_id = $user['id'] ?? null;
$note_id = $_POST['id'] ?? null;

$select_query = 'SELECT * FROM notes WHERE id = :note_id';
$select_params = [':note_id' => $note_id];
$note = $db->query($select_query, $select_params)->fetchOrFail();

authorize($note['user_id'] === $user_id, Response::FORBIDDEN);

$attributes = ['body' => $_POST['body']];
$form = NoteForm::validateForm($attributes);

$update_query = 'UPDATE notes SET body = :body WHERE id = :note_id';
$update_params = [
    ':body' => $attributes['body'],
    ':note_id' => $note_id
];
$db->query($update_query, $update_params);

redirect("/notes?id={$note_id}");
