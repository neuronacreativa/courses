<?php

namespace App\registry\domain\entity;

use App\registry\domain\shared\Entity;

class Communication implements Entity
{
    private $type;
    private $resume;
    private $content;

    /**
     * @param $type
     * @param $resume
     * @param $content
     */
    public function __construct($type, $resume, $content)
    {
        $this->type = $type;
        $this->resume = $resume;
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getResume()
    {
        return $this->resume;
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