<?php

use Core\App;
use Core\Database;
use Core\Validator;
use Core\Response;
use Core\Session;

$db = App::resolve(Database::class);

$user = Session::get('user', []);
$user_id = $user['id'] ?? null;
$note_id = $_POST['id'] ?? null;
$note = $db->query('SELECT * FROM notes WHERE id = :note_id', [':note_id' => $note_id])->fetchOrFail();

authorize($note['user_id'] === $user_id, Response::FORBIDDEN);

$errors = [];

if (!Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'Body length must be between 1 and 1000';
}

// TODO: redirect with errors
// TODO: extract validation
// TODO: persist input
if (!empty($errors)) {
    return view('notes/edit.view.php', [
        'note' => $note,
        'errors' => $errors
    ]);
}

$db->query('UPDATE notes SET body = :body WHERE id = :note_id', [
    ':body' => $_POST['body'],
    ':note_id' => $note_id
]);

header('Location: /notes');
die();
