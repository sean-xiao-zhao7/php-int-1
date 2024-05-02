<?php

namespace Xi\Php;

use Xi\Php\Routing\Router;

class App
{
    protected $router;

    public function __construct()
    {
        $this->router = new Router();
    }

    public function register_route(string $path, callable $action): void
    {
        $this->router->register($path, $action);
    }
}
