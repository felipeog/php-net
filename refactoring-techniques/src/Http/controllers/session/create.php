<?php

use Core\Session;

$attributes = [
    'errors' => Session::get('errors', []),
    'old' => Session::get('old', [])
];

view('session/create.view.php', $attributes);
