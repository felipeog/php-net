<?php

use Core\App;
use Core\Database;
use Core\Session;

$db = App::resolve(Database::class);

$user = Session::get('user', []);
$user_id = $user['id'] ?? null;

$query = 'SELECT * FROM notes WHERE user_id = :user_id';
$params = [':user_id' => $user_id];
$notes = $db->query($query, $params)->fetchAll();

view('notes/index', ['notes' => $notes]);
