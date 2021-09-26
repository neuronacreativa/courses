<?php

namespace App\documents\application\document\create;

use App\documents\domain\entity\Document;

class CreateDocumentRequest
{
    private $name;
    private $mime;
    private $location;
    private $content;

    /**
     * @param $name
     * @param $mime
     * @param $location
     * @param $content
     */
    public function __construct($name, $mime, $location, $content)
    {
        $this->name = $name;
        $this->mime = $mime;
        $this->location = $location;
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getMime()
    {
        return $this->mime;
    }

    /**
     * @param mixed $mime
     */
    public function setMime($mime): void
    {
        $this->mime = $mime;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location): void
    {
        $this->location = $location;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }

    public function getDocument(): Document
    {
        return new Document(
            $this->getName(),
            $this->getMime(),
            $this->getLocation(),
            $this->getContent()
        );
    }

}