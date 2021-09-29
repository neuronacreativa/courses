<?php

namespace App\registry\domain\entity;

use App\registry\domain\shared\Entity;

class Unit implements Entity
{
    private $unitCode;
    private $unitName;

    /**
     * @param $unitCode
     * @param $unitName
     */
    public function __construct($unitCode, $unitName)
    {
        $this->unitCode = $unitCode;
        $this->unitName = $unitName;
    }

    /**
     * @return mixed
     */
    public function getUnitCode()
    {
        return $this->unitCode;
    }

    /**
     * @return mixed
     */
    public function getUnitName()
    {
        return $this->unitName;
    }

    function sameIdentityAs($other): bool
    {
        return $this->getUnitCode() == $other->getUnitCode();
    }
}