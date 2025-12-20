<?php

class Validator
{
    public static function string($value, $min = 1, $max = INF)
    {
        if (!is_string($value)) {
            return false;
        }

        $trimmedValue = trim($value);

        return strlen($trimmedValue) >= $min && strlen($trimmedValue) <= $max;
    }

    public static function email($value)
    {
        if (!is_string($value)) {
            return false;
        }

        return filter_var($value, FILTER_VALIDATE_EMAIL) !== false;
    }
}
