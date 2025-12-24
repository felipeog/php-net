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

function login($user)
{
    $_SESSION['user'] = [
        'email' => $user['email'],
        'id' => (int) $user['id']
    ];

    session_regenerate_id(true);
}

function logout()
{
    $_SESSION = [];
    $params = session_get_cookie_params();
    $expires = time() - 3_600;

    session_destroy();
    setcookie(
        'PHPSESSID',
        '',
        $expires,
        $params['path'],
        $params['domain'],
        $params['secure'],
        $params['httponly']
    );
}