<?php

$hardcodedUserId = 1;
$config = require base_path('config.php');
$db = new Core\Database($config['dbDsn'], $config['dbCredentials']);

$notes = $db->query('SELECT * FROM notes WHERE user_id = :user_id', [
    ':user_id' => $hardcodedUserId
])->fetchAll();

view('notes/index.view.php', ['notes' => $notes]);
