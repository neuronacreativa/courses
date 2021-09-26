<?php

namespace App\registry\application\document\create;

use App\registry\domain\entity\Document;

class CreateDocumentRequest
{
    private $id;

    /**
     * @param $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function getDocument(): Document
    {
        return new Document(
            $this->getId()
        );
    }

}