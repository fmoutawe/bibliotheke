<?php


namespace App\Shared\Exception;


class ViewNotFoundException extends HttpException
{
    public function __construct()
    {
        parent::__construct(500, 'Please provide a existing view file.');
    }
}
