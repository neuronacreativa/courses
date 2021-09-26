<?php

namespace App\registry\domain\exception;


class RegistryException extends \Exception
{

    public function __construct($message)
    {
        parent::__construct($message);
    }
}