<?php

$router->get('/', 'controllers/index.php');
$router->get('/error', 'controllers/error.php');
$router->get('/note', 'controllers/notes/show.php');
$router->get('/notes', 'controllers/notes/index.php');
$router->get('/note-create', 'controllers/notes/create.php');
