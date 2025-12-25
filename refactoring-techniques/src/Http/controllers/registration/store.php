<?php

use Core\App;
use Core\Authenticator;
use Core\Database;
use Http\Forms\RegisterForm;

$attributes = [
    'email' => $_POST['email'],
    'password' => $_POST['password']
];

$form = RegisterForm::validateForm($attributes);

$db = App::resolve(Database::class);

$existing_user = $db->query('SELECT * FROM users WHERE email = :email', [
    ':email' => $attributes['email'],
])->fetch();

if ($existing_user) {
    $form->error('email', 'Invalid email')->throw();
}

$db->query('INSERT INTO users (email, password) VALUES (:email, :password)', [
    ':email' => $attributes['email'],
    ':password' => password_hash($attributes['password'], PASSWORD_BCRYPT)
]);

$auth = new Authenticator();
$user_id = $db->connection->lastInsertId();
$user = [
    'email' => $attributes['email'],
    'id' => $user_id,
];

$auth->login($user);
redirect('/');
