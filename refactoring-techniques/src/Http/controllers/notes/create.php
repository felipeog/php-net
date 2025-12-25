<?php

use Core\Session;

$attributes = [
    'errors' => Session::get('errors', []),
    'old' => Session::get('old', [])
];

view('notes/create.view.php', $attributes);
