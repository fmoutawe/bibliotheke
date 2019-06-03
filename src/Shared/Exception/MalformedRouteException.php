<?php


namespace App\Shared\Exception;


class MalformedRouteException extends HttpException
{
    public function __construct()
    {
        parent::__construct(500, 'An error occured when trying to create a response for this url.');
    }
}
