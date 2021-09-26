<?php

namespace App\registry\domain\exception;

class EntityException extends RegistryException
{

    public function __construct($message)
    {
        parent::__construct($message);
    }
}