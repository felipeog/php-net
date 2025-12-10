<?php

function isCurrentUri($uri)
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
