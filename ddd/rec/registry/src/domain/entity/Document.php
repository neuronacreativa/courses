<?php

namespace App\registry\domain\entity;

use App\registry\domain\shared\Entity;

class Document implements Entity
{
    private $uuid;

    public function __construct($uuid)
    {
        $this->uuid = $uuid;
    }

    /**
     * @return mixed
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    function sameIdentityAs($other): bool
    {
        return false;
    }
}