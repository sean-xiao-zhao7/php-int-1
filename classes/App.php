<?php

namespace Xi\Php;

use Xi\Php\Routing\Router;
use Xi\Php\Controllers\HomeController;
use Xi\Php\Controllers\InvoicesController;

class App
{
    protected $router;

    public function __construct()
    {
        $this->router = new Router();
    }

    public function register_routes(): void
    {
        $this->router->register('/', new HomeController());
        $this->router->register('/invoices', new InvoicesController());
    }
}
