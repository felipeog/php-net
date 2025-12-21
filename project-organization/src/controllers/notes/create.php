<?php

$hardcodedUserId = 1;
$config = require base_path('config.php');
$db = new Core\Database($config['dbDsn'], $config['dbCredentials']);

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!Core\Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = 'Body length must be between 1 and 1000';
    }

    if (empty($errors)) {
        $db->query('INSERT INTO notes (body, user_id) VALUES (:body, :user_id)', [
            ':body' => $_POST['body'],
            ':user_id' => $hardcodedUserId
        ]);
    }
}

view('notes/create.view.php', ['errors' => $errors]);
