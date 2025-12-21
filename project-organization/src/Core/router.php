<?php

$urlComponents = parse_url($_SERVER['REQUEST_URI']);
$path = $urlComponents['path'];
$routes = require base_path('routes.php');

if (array_key_exists($path, $routes)) {
    require base_path($routes[$path]);
} else {
    abort(Core\Response::NOT_FOUND);
}
