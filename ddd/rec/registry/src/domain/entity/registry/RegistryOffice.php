<?php

namespace App\registry\domain\entity;

use App\registry\domain\exception\EntityException;
use App\registry\domain\shared\Entity;

class RegistryOffice implements Entity
{
    private $registryOfficeCode;
    private $registryOfficeName;

    /**
     * @param $registryOfficeCode
     * @param $registryOfficeName
     * @throws EntityException
     */
    public function __construct($registryOfficeCode, $registryOfficeName)
    {
        if (empty($registryOfficeCode)) {
            throw new EntityException("RegistryOfficeCode is not valid");
        }
        if (empty($registryOfficeName)) {
            throw new EntityException("RegistryOfficeName is not valid");
        }
        $this->registryOfficeCode = $registryOfficeCode;
        $this->registryOfficeName = $registryOfficeName;
    }

    /**
     * @return mixed
     */
    public function getRegistryOfficeCode()
    {
        return $this->registryOfficeCode;
    }

    /**
     * @return mixed
     */
    public function getRegistryOfficeName()
    {
        return $this->registryOfficeName;
    }

    function sameIdentityAs($other): bool
    {
        return $this->getRegistryOfficeCode() == $other->getRegistryOfficeCode();
    }
}