<?php

namespace App\documents\application\document\create\dto;

class CreateDocumentResponse
{
    private $uuid;
    private $location;

    /**
     * @param $uuid
     * @param $location
     */
    public function __construct($uuid, $location)
    {
        $this->uuid = $uuid;
        $this->location = $location;
    }

    /**
     * @return mixed
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

}