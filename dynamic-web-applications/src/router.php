<?php

$urlComponents = parse_url($_SERVER['REQUEST_URI']);
$path = $urlComponents['path'];
$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/post' => 'controllers/post.php',
    '/error' => 'controllers/error.php',
];

if (array_key_exists($path, $routes)) {
    require $routes[$path];
} else {
    abort(404);
}
