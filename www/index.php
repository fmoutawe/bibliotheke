<?php

DEFINE('CONFIG_PATH', dirname(__DIR__).DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR);
DEFINE('VIEWS_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR);

require_once  CONFIG_PATH . 'autoload.php';

$routes = require_once CONFIG_PATH . 'routes.php';
$app = new \App\Application();
$app->init($routes);

try {
    $app->resolveRoute();
} catch (\App\Shared\Exception\HttpException $exception) {
    http_response_code($exception->getCode());
    require_once VIEWS_PATH . 'errors' . DIRECTORY_SEPARATOR . 'http-exception.php';
}
