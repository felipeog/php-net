<?php

$notes = $db->query('SELECT * FROM notes WHERE user_id = :user_id', [
    ':user_id' => $hardcodedUserId
])->fetchAll();

require base_path('views/notes/index.view.php');
