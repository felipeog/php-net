<?php

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

function abort($code = Response::NOT_FOUND)
{
    header("Location: /error?code={$code}");

    die();
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
