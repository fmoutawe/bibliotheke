<?php

class Autoloader
{
    public static function register()
    {
        spl_autoload_register([__CLASS__, 'autoload']);
    }

    public static function autoload($class)
    {
        $class = str_replace('App\\', DIRECTORY_SEPARATOR, $class);
        $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

        require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . $class . '.php';
    }
}

Autoloader::register();
