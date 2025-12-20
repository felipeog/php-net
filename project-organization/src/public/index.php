<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'functions.php';

spl_autoload_register(function ($class) {
    require base_path("Core/{$class}.php");
});

$hardcodedUserId = 1;
$config = require base_path('config.php');
$db = new Database($config['dbDsn'], $config['dbCredentials']);

require base_path('router.php');
