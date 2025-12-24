<?php

use Core\App;
use Core\Database;
use Core\Response;

$db = App::resolve(Database::class);

$user_id = $_SESSION['user']['id'] ?? null;
$id = $_GET['id'] ?? null;
$note = $db->query('SELECT * FROM notes WHERE id = :id', [':id' => $id])->fetchOrFail();

authorize($note['user_id'] === $user_id, Response::FORBIDDEN);
view('notes/show.view.php', ['note' => $note]);
