<?php

$id = $_GET['id'] ?? null;
$query = 'SELECT * FROM posts WHERE id = :id';
$post = $db->query($query, [':id' => $id])->fetch();

if (!$post) {
    abort(404);
}

require 'views/post.view.php';
