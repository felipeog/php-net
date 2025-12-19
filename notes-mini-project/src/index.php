<?php

require 'functions.php';
require 'Response.php';
require 'Validator.php';
require 'Database.php';

$hardcodedUserId = 1;
$config = require 'config.php';
$db = new Database($config['dbDsn'], $config['dbCredentials']);

require 'router.php';
