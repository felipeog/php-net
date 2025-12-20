<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    if (!Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = 'Body length must be between 1 and 1000';
    }

    if (empty($errors)) {
        $db->query('INSERT INTO notes (body, user_id) VALUES (:body, :user_id)', [
            ':body' => $_POST['body'],
            ':user_id' => $hardcodedUserId
        ]);
    }
}

require base_path('views/notes/create.view.php');
