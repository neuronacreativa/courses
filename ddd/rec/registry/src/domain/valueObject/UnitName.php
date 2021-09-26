<?php

namespace App\registry\domain\entity;

use App\registry\domain\exception\ValueObjectException;

class UnitName
{

    private $name;

    /**
     * @param $name
     * @throws ValueObjectException
     */
    public function __construct($name)
    {
        if (empty($name))
        {
            throw new ValueObjectException("UnitName it's empty");
        }
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


}