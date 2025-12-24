<?php

$router->get('/', 'index');

$router->get('/error', 'error');

$router->get('/notes', 'notes/index')->only('auth');
$router->get('/notes/create', 'notes/create')->only('auth');
$router->post('/notes', 'notes/store')->only('auth');
$router->patch('/notes', 'notes/update')->only('auth');
$router->get('/note', 'notes/show')->only('auth');
$router->delete('/note', 'notes/destroy')->only('auth');
$router->get('/note/edit', 'notes/edit')->only('auth');

$router->get('/register', 'registration/create')->only('guest');
$router->post('/register', 'registration/store')->only('guest');

$router->get('/login', 'session/create')->only('guest');
$router->post('/session', 'session/store')->only('guest');
$router->delete('/session', 'session/destroy')->only('auth');
