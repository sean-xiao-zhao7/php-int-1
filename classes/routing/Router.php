<?php

namespace Xi\Php\Routing;

use Xi\Php\Controllers\AbstractController;

class Router
{
    private $routes = array();

    public function register(string $route, AbstractController $controller): self
    {
        $this->routes[$route] = $controller;

        return $this;
    }

    public function resolve_route(string $requestUri): void
    {
        $uri = explode('?', $requestUri)[0];
        $controller = $this->routes[$uri];
        $controller->render_view();
    }
}
