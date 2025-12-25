<?php

use Core\Session;

$user = Session::get('user', []);
$email = $user['email'] ?? null;

view('index.view.php', ['email' => $email]);
