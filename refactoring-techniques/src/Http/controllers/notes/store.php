<?php

use Core\App;
use Core\Database;
use Core\Session;
use Http\Forms\NoteForm;

$attributes = [
    'body' => $_POST['body'],
];

$form = NoteForm::validateForm($attributes);

$db = App::resolve(Database::class);

$user = Session::get('user', []);
$user_id = $user['id'] ?? null;
$db->query('INSERT INTO notes (body, user_id) VALUES (:body, :user_id)', [
    ':body' => $attributes['body'],
    ':user_id' => $user_id
]);
$note_id = $db->connection->lastInsertId();

redirect("/note?id={$note_id}");
