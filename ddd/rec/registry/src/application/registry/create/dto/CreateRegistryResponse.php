<?php

namespace App\registry\application\registry\create\dto;

class CreateRegistryResponse
{
    private $uuid;

    /**
     * @param $uuid
     */
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
}