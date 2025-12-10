<?php

$urlComponents = parse_url($_SERVER['REQUEST_URI']);
$path = $urlComponents['path'];
$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
];


if (array_key_exists($path, $routes)) {
    require $routes[$path];
} else {
    http_response_code(404);
    echo "404 Not Found";
    die();
}
