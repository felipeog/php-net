<?php

require 'vendor/autoload.php';

use Workshop\Storage;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$file_content = 'Hello, world!';
$file_name = 'hello-world.txt';

$storage = Storage::resolve();
$storage->put($file_name, $file_content);

echo "Done!\n";
