<?php

namespace App\registry\domain\exception;

class ValueObjectException extends RegistryException
{

    public function __construct($message)
    {
        parent::__construct($message);
    }
}