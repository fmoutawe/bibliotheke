<?php


namespace App\Shared\Exception;


abstract class HttpException extends \Exception
{

    public function __construct(int $code, string $message)
    {
        parent::__construct($message, $code);
    }
}
