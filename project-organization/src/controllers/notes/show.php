<?php

$id = $_GET['id'] ?? null;
$query = 'SELECT * FROM notes WHERE id = :id';
$note = $db->query($query, [':id' => $id])->fetchOrFail();

authorize($note['user_id'] === $hardcodedUserId, Response::FORBIDDEN);

require 'views/notes/show.view.php';
