<?php

namespace Xi\Php\Routing;

use Xi\Php\Controllers\AbstractController;

class Router
{
    private $routes = array();

    public function register(string $route, AbstractController $action): self
    {
        $this->routes[$route] = $action;

        return $this;
    }
}
