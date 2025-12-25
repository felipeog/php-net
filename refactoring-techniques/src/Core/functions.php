<?php

use Core\Response;

function is_current_uri($uri)
{
    return $_SERVER['REQUEST_URI'] === $uri;
}

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function redirect($path)
{
    header("Location: {$path}");
    die();
}

function abort($code = Response::NOT_FOUND)
{
    redirect("/error?code={$code}");
}

function authorize($condition, $code = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($code);
    }
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);

    require base_path("/views/{$path}");
}

function partial($path, $attributes = [])
{
    extract($attributes);

    require base_path("/views/partials/{$path}");
}

function old($key, $default = '')
{
    return Core\Session::get('old')[$key] ?? $default;
}
