<?php

namespace App;

use App\Shared\Utils\Router;

class Application
{
    /** @var Router $router */
    private $router;

    public function init(array $routes) {
        $this->router = new Router($routes);
    }

    /**
     * @throws Exception\MalformedRouteException
     */
    public function resolveRoute() {
        $action = $this->router->resolveRoute();
        $action->execute();
    }
}
