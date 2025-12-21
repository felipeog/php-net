<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$hardcodedUserId = 1;

$errors = [];

if (!Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'Body length must be between 1 and 1000';
}

// TODO: redirect with errors
if (!empty($errors)) {
    return view('notes/create.view.php', ['errors' => $errors]);
}

$db->query('INSERT INTO notes (body, user_id) VALUES (:body, :user_id)', [
    ':body' => $_POST['body'],
    ':user_id' => $hardcodedUserId
]);

header('Location: /notes');
