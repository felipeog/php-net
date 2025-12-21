<?php

$hardcodedUserId = 1;
$config = require base_path('config.php');
$db = new Core\Database($config['dbDsn'], $config['dbCredentials']);

$select_query = 'SELECT * FROM notes WHERE id = :id';
$delete_query = 'DELETE FROM notes WHERE id = :id';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;
    $note = $db->query($select_query, [':id' => $id])->fetchOrFail();

    authorize($note['user_id'] === $hardcodedUserId, Core\Response::FORBIDDEN);

    $db->query($delete_query, [':id' => $id]);

    header('Location: /notes');
    die();
} else {
    $id = $_GET['id'] ?? null;
    $note = $db->query($select_query, [':id' => $id])->fetchOrFail();

    authorize($note['user_id'] === $hardcodedUserId, Core\Response::FORBIDDEN);
    view('notes/show.view.php', ['note' => $note]);
}
