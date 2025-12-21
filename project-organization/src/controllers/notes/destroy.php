<?php

$hardcodedUserId = 1;
$config = require base_path('config.php');
$db = new Core\Database($config['dbDsn'], $config['dbCredentials']);

$id = $_POST['id'] ?? null;
$note = $db->query('SELECT * FROM notes WHERE id = :id', [':id' => $id])->fetchOrFail();

authorize($note['user_id'] === $hardcodedUserId, Core\Response::FORBIDDEN);

$db->query('DELETE FROM notes WHERE id = :id', [':id' => $id]);

header('Location: /notes');
