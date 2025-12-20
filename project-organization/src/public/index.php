<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'functions.php';
require base_path('Response.php');
require base_path('Validator.php');
require base_path('Database.php');

$hardcodedUserId = 1;
$config = require base_path('config.php');
$db = new Database($config['dbDsn'], $config['dbCredentials']);

require base_path('router.php');
