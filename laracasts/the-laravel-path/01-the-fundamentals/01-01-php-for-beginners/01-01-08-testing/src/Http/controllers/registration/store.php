<?php

use Core\App;
use Core\Authenticator;
use Core\Database;
use Http\Forms\RegisterForm;

$db = App::resolve(Database::class);

$attributes = [
    'email' => $_POST['email'],
    'password' => $_POST['password']
];
$form = RegisterForm::validateForm($attributes);

$select_query = 'SELECT * FROM users WHERE email = :email';
$select_params = [':email' => $attributes['email']];
$existing_user = $db->query($select_query, $select_params)->fetch();

if ($existing_user) {
    $form->error('email', 'Invalid email')->throw();
}

$insert_query = 'INSERT INTO users (email, password) VALUES (:email, :password)';
$insert_params = [
    ':email' => $attributes['email'],
    ':password' => password_hash($attributes['password'], PASSWORD_BCRYPT)
];
$db->query($insert_query, $insert_params);

$user_id = $db->connection->lastInsertId();
$user = [
    'email' => $attributes['email'],
    'id' => $user_id,
];

$auth = new Authenticator();
$auth->login($user);

redirect('/');
