<?php

namespace App\registry\domain\entity;

use App\registry\domain\exception\EntityException;
use App\registry\domain\shared\Entity;

class Registry implements Entity
{
    private $uuid;
    private Interested $interested;
    private Unit $unit;
    private RegistryOffice $registryOffice;
    private Document $document;
    private Communication $communication;
    private ExchangerCode $exchangerCode;
    private $registryNumber;
    private $subject;

    /**
     * @param Interested $interested
     * @param Unit $unit
     * @param RegistryOffice $registryOffice
     * @param Document $document
     * @param Communication $communication
     * @param ExchangerCode $exchangerCode
     * @param $registryNumber
     * @param $subject
     * @param $uuid
     * @throws EntityException
     */
    public function __construct(Interested $interested, Unit $unit, RegistryOffice $registryOffice, Document $document, Communication $communication, ExchangerCode $exchangerCode, $registryNumber, $subject)
    {
        // Generate a valid uuid
        $this->uuid = "This is a Uuid";
        // 0 to N interested Entity
        $this->interested = $interested;
        // Not empty
        $this->unit = $unit;
        // Not empty
        $this->registryOffice = $registryOffice;
        // 0 to N document Entity
        $this->document = $document;
        // 0 to N communication Entity
        $this->communication = $communication;
        // Not empty
        $this->exchangerCode = $exchangerCode;
        // Not empty
        if (empty($registryNumber))
        {
            throw new EntityException("RegistryNumber is empty");
        }
        if (!preg_match('[a-zA-Z0-9]', $registryNumber) && strlen($registryNumber) != 16)
        {
            throw new EntityException("RegistryNumber is not valid");
        }
        $this->registryNumber = $registryNumber;
        // Not empty
        if (empty($subject))
        {
            throw new EntityException("Subject is empty");
        }
        if (strlen($registryNumber) != 50)
        {
            throw new EntityException("RegistryNumber is not valid");
        }
        $this->subject = $subject;
    }

    /**
     * @return Interested
     */
    public function getInterested(): Interested
    {
        return $this->interested;
    }

    /**
     * @return Unit
     */
    public function getUnit(): Unit
    {
        return $this->unit;
    }

    /**
     * @return RegistryOffice
     */
    public function getRegistryOffice(): RegistryOffice
    {
        return $this->registryOffice;
    }

    /**
     * @return Document
     */
    public function getDocument(): Document
    {
        return $this->document;
    }

    /**
     * @return Communication
     */
    public function getCommunication(): Communication
    {
        return $this->communication;
    }

    /**
     * @return mixed
     */
    public function getExchangerCode()
    {
        return $this->exchangerCode;
    }

    /**
     * @return mixed
     */
    public function getRegistryNumber()
    {
        return $this->registryNumber;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    function sameIdentityAs($other): bool
    {
        return $this->getExchangerCode() == $other->getExchangerCode();
    }

    /**
     * @return mixed
     */
    public function getUuid()
    {
        return $this->uuid;
    }

}