<?php

use Core\Session;

$errors = Session::get('errors', []);

view('session/create.view.php', ['errors' => $errors]);
