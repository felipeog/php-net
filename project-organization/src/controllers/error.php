<?php

$code = $_GET['code'] ?? null;

view('error.view.php', ['code' => $code]);
