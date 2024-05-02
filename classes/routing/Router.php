<?php

namespace Xi\Php\Routing;

class Router
{
    private $routes = array();

    public function register(string $route, callable $action): self
    {
        $this->routes[$route] = $action;

        return $this;
    }
}
