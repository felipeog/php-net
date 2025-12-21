<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'Core/functions.php';

spl_autoload_register(function ($class) {
    $class_path = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    require base_path("{$class_path}.php");
});

$hardcodedUserId = 1;
$config = require base_path('config.php');
$db = new Core\Database($config['dbDsn'], $config['dbCredentials']);

require base_path('Core/router.php');
