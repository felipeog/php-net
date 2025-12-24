<?php

use Core\App;
use Core\Database;
use Http\Forms\LoginForm;

$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();

if (!$form->validate($email, $password)) {
    return view('session/create.view.php', [
        'errors' => $form->errors()
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
