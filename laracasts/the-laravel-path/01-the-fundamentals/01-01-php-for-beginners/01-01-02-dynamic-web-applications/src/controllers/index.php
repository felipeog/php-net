<?php

$posts = $db->query('SELECT * FROM posts')->fetchAll();

require 'views/index.view.php';
