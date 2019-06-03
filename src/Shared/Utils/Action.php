<?php


namespace App\Shared\Utils;


class Action
{
    /** @var string  */
    private $class;
    /** @var string  */
    private $method;

    public function __construct(string $class, string $method)
    {
        $this->class = $class;
        $this->method = $method;
    }

    public function execute() {
        $controller = new $this->class();
        $method = $this->method;
        $controller->$method();
    }
}
