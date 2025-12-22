<?php

use Core\App;
use Core\Database;
use Core\Response;

$db = App::resolve(Database::class);

$hardcodedUserId = 1;
$id = $_POST['id'] ?? null;
$note = $db->query('SELECT * FROM notes WHERE id = :id', [':id' => $id])->fetchOrFail();

authorize($note['user_id'] === $hardcodedUserId, Response::FORBIDDEN);

$db->query('DELETE FROM notes WHERE id = :id', [':id' => $id]);

header('Location: /notes');
die();
