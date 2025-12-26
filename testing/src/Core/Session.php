<?php

namespace Core;

class Session
{
    public const FLASH_KEY = "_session_flash";

    public static function has($key)
    {
        return (bool) static::get($key);
    }

    public static function put($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function get($key, $default = null)
    {
        return $_SESSION[self::FLASH_KEY][$key] ?? $_SESSION[$key] ?? $default;
    }

    public static function flash($key, $value)
    {
        $_SESSION[self::FLASH_KEY][$key] = $value;
    }

    public static function unflash()
    {
        unset($_SESSION[self::FLASH_KEY]);
    }

    public static function flush()
    {
        $_SESSION = [];
    }

    public static function destroy()
    {
        $params = session_get_cookie_params();
        $expires = time() - 3_600;

        static::flush();
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
}
