<?php

namespace App\registry\domain\entity;

use App\registry\domain\shared\Entity;

class Representative implements Entity
{
    private $name;
    private $firstSurName;
    private $secondSurName;
    private $documentIdentifierType;
    private $documentIdentifier;
    private $businessName;
    private $country;
    private $province;
    private $city;
    private $postalCode;
    private $address;
    private $email;
    private $telephone;

    /**
     * @param $name
     * @param $firstSurName
     * @param $secondSurName
     * @param $documentIdentifierType
     * @param $documentIdentifier
     * @param $bussinessName
     * @param $country
     * @param $province
     * @param $city
     * @param $postalCode
     * @param $address
     * @param $email
     * @param $telephone
     */
    public function __construct($name, $firstSurName, $secondSurName, $documentIdentifierType, $documentIdentifier, $bussinessName, $country, $province, $city, $postalCode, $address, $email, $telephone)
    {
        $this->name = $name;
        $this->firstSurName = $firstSurName;
        $this->secondSurName = $secondSurName;
        $this->documentIdentifierType = $documentIdentifierType;
        $this->documentIdentifier = $documentIdentifier;
        $this->businessName = $bussinessName;
        $this->country = $country;
        $this->province = $province;
        $this->city = $city;
        $this->postalCode = $postalCode;
        $this->address = $address;
        $this->email = $email;
        $this->telephone = $telephone;
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
    public function getFirstSurName()
    {
        return $this->firstSurName;
    }

    /**
     * @return mixed
     */
    public function getSecondSurName()
    {
        return $this->secondSurName;
    }

    /**
     * @return mixed
     */
    public function getDocumentIdentifierType()
    {
        return $this->documentIdentifierType;
    }

    /**
     * @return mixed
     */
    public function getDocumentIdentifier()
    {
        return $this->documentIdentifier;
    }

    /**
     * @return mixed
     */
    public function getBusinessName()
    {
        return $this->businessName;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return mixed
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    function sameIdentityAs($other): bool
    {
        return false;
    }
}