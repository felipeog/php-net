<?php

use Core\App;
use Core\Database;
use Core\Session;
use Http\Forms\NoteForm;

$db = App::resolve(Database::class);

$attributes = ['body' => $_POST['body']];
$form = NoteForm::validateForm($attributes);

$user = Session::get('user', []);
$user_id = $user['id'] ?? null;

$query = 'INSERT INTO notes (body, user_id) VALUES (:body, :user_id)';
$params = [
    ':body' => $attributes['body'],
    ':user_id' => $user_id
];
$db->query($query, $params);
$note_id = $db->connection->lastInsertId();

redirect("/note?id={$note_id}");
