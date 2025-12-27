<?php

namespace Core;

use Core\Middleware\Middleware;

class Router
{
    protected $routes = [];

    protected function add($method, $uri, $controller)
    {
        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'controller' => $controller,
            'middleware' => null
        ];

        return $this;
    }

    public function get($uri, $controller)
    {
        return $this->add('GET', $uri, $controller);
    }

    public function post($uri, $controller)
    {
        return $this->add('POST', $uri, $controller);
    }

    public function delete($uri, $controller)
    {
        return $this->add('DELETE', $uri, $controller);
    }

    public function patch($uri, $controller)
    {
        return $this->add('PATCH', $uri, $controller);
    }

    public function put($uri, $controller)
    {
        return $this->add('PUT', $uri, $controller);
    }

    public function only($key)
    {
        $last_key = array_key_last($this->routes);

        $this->routes[$last_key]['middleware'] = $key;
    }

    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            $is_current_uri = $route['uri'] === $uri;
            $is_current_method = $route['method'] === strtoupper($method);

            if ($is_current_uri && $is_current_method) {
                Middleware::resolve($route['middleware']);

                return require base_path("Http/controllers/{$route['controller']}.php");
            }
        }


        $this->abort(Response::NOT_FOUND);
    }

    public function previousUrl()
    {
        return $_SERVER['HTTP_REFERER'] ?? '/';
    }

    protected function abort($code = Response::NOT_FOUND)
    {
        redirect("/error?code={$code}");
    }
}
