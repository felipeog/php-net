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
$note = $db->query('SELECT * FROM notes WHERE id = :note_id', [':note_id' => $note_id])->fetchOrFail();

authorize($note['user_id'] === $user_id, Response::FORBIDDEN);

$attributes = [
    'body' => $_POST['body'],
];

$form = NoteForm::validateForm($attributes);

$db->query('UPDATE notes SET body = :body WHERE id = :note_id', [
    ':body' => $attributes['body'],
    ':note_id' => $note_id
]);

redirect("/notes?id={$note_id}");
