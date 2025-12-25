<?php

use Core\Session;

$user = Session::get('user', []);
$email = $user['email'] ?? null;
$attributes = ['email' => $email];

view('index.view.php', $attributes);
