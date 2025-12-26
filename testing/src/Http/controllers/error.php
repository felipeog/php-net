<?php

$code = $_GET['code'] ?? null;

view('error', ['code' => $code]);
