<?php

use Core\App;
use Core\Database;
use Core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];
$errors = [];

if (!Validator::email($email)) {
    $errors['email'] = 'Invalid email address';
}

if (!Validator::string($password, 8, 255)) {
    $errors['password'] = 'Invalid password';
}

if (!empty($errors)) {
    return view('session/create.view.php', [
        'errors' => $errors
    ]);
}

$db = App::resolve(Database::class);

$user = $db->query('SELECT * FROM users WHERE email = :email', [
    ':email' => $email
])->fetch();

if ($user && password_verify($password, $user['password'])) {
    login($user);
    header('Location: /');
    die();
}

view('session/create.view.php', [
    'errors' => ['password' => 'Invalid credentials']
]);
