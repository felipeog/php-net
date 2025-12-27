<?php

namespace Core\Middleware;

class Middleware
{
    public const MAP = [
        'auth' => Auth::class,
        'guest' => Guest::class
    ];


    public static function resolve($key)
    {
        if (!$key) {
            return;
        }

        $middleware_class = static::MAP[$key];

        if (!$middleware_class) {
            throw new \Exception("No matching middleware found for key: {$key}");
        }

        $middleware = new $middleware_class();

        $middleware->handle();
    }
}
