<?php


namespace App\Shared\Utils;

use App\Shared\Exception\MalformedRouteException;

class Router
{
    /** @var array */
    private $routes;

    /** @var array */
    private $paths;

    public function __construct(array $routes)
    {
        $this->routes = $routes;
        $this->paths = array_keys($routes);
    }

    /**
     * @throws MalformedRouteException
     */
    public function resolveRoute() : Action {
        $requestUri = $_SERVER['REQUEST_URI'];

        if (!in_array($requestUri, $this->paths)) {
            $requestUri = '/404';
        }

        $action = $this->routes[$requestUri];
        list($class, $method) = explode('::', $action);

        if (empty($class) || empty($method)) {
            throw new MalformedRouteException();
        }

        return new Action($class, $method);
    }
}
