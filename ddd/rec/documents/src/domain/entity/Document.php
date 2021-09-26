<?php

namespace App\documents\domain\entity;

use App\documents\domain\shared\Entity;

class Document implements Entity
{
    private $uuid;
    private $name;
    private $mime;
    private $location;
    private $content;

    public function __construct($uuid, $name, $mime, $location, $content)
    {
        $this->uuid = $uuid;
        $this->name = $name;
        $this->mime = $mime;
        $this->location = $location;
        $this->content = $content;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getMime()
    {
        return $this->mime;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    function sameIdentityAs($other): bool
    {
        return false;
    }
}