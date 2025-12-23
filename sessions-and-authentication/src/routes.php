<?php

$router->get('/', 'controllers/index.php');

$router->get('/error', 'controllers/error.php');

$router->get('/notes', 'controllers/notes/index.php');
$router->post('/notes', 'controllers/notes/store.php');
$router->patch('/notes', 'controllers/notes/update.php');
$router->get('/notes/create', 'controllers/notes/create.php');

$router->get('/note', 'controllers/notes/show.php');
$router->delete('/note', 'controllers/notes/destroy.php');
$router->get('/note/edit', 'controllers/notes/edit.php');

$router->get('/register', 'controllers/registration/create.php');
$router->post('/register', 'controllers/registration/store.php');
