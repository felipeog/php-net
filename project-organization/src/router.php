<?php

$urlComponents = parse_url($_SERVER['REQUEST_URI']);
$path = $urlComponents['path'];
$routes = require base_path('routes.php');

if (array_key_exists($path, $routes)) {
    require $routes[$path];
} else {
    abort(Response::NOT_FOUND);
}
