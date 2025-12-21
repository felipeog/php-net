<?php

$router->get('/', 'controllers/index.php');

$router->get('/error', 'controllers/error.php');

$router->get('/note', 'controllers/notes/show.php');
$router->delete('/note', 'controllers/notes/destroy.php');

$router->get('/notes', 'controllers/notes/index.php');
$router->post('/notes', 'controllers/notes/store.php');

$router->get('/notes/create', 'controllers/notes/create.php');
