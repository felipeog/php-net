<?php

use Core\Authenticator;
use Http\Forms\LoginForm;

$attributes = [
    'email' => $_POST['email'],
    'password' => $_POST['password']
];

$form = LoginForm::validateForm($attributes);

$auth = new Authenticator();
$signed_in = $auth->attempt($attributes['email'], $attributes['password']);

if (!$signed_in) {
    $form->error('password', 'Invalid credentials')->throw();
}

redirect('/');
