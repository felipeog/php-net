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
    $errors['password'] = 'Password length must be between 8 and 255';
}

if (!empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}

$db = App::resolve(Database::class);

$existing_user = $db->query('SELECT * FROM users WHERE email = :email', [
    ':email' => $email
])->fetch();

if ($existing_user) {
    header('Location /');
    die();
}

$db->query('INSERT INTO users (email, password) VALUES (:email, :password)', [
    ':email' => $email,
    ':password' => password_hash($password, PASSWORD_BCRYPT)
]);

login($user);
header('Location: /');
die();
