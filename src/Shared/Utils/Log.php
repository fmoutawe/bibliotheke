<?php


namespace App\Shared\Utils;


class Log
{
    public static function dump($mixed) {
        echo '<pre>'; var_dump($mixed); echo '</pre>';
    }
}
