<?php

namespace App\registry\application\registry\create\dto;

use App\registry\domain\entity\Document;
use App\registry\domain\entity\Interested;
use App\registry\domain\entity\Registry;
use App\registry\domain\entity\RegistryOffice;
use App\registry\domain\entity\Unit;
use App\registry\domain\exception\EntityException;

class CreateRegistryRequest
{

    // ¿¿¿ Qué cosas vemos raras en esta clase???
    // 1 - Estamos obligando al cliente de esta clase a que cree los objetos atributo antes de construirla.
    // 2 - Estos objetos son de la capa domain, por lo tanto, no debería poder crearlos
    //      desde la capa de infraestructura.

    private Interested $interested;
    private Unit $unit;
    private RegistryOffice $registryOffice;
    private Document $document;
    private $exchangerCode;
    private $registryNumber;
    private $subject;

    /**
     * @param Interested $interested
     * @param Unit $unit
     * @param RegistryOffice $registryOffice
     * @param Document $document
     * @param $exchangerCode
     * @param $registryNumber
     * @param $subject
     */
    public function __construct(Interested $interested, Unit $unit, RegistryOffice $registryOffice, Document $document, $exchangerCode, $registryNumber, $subject)
    {
        $this->interested = $interested;
        $this->unit = $unit;
        $this->registryOffice = $registryOffice;
        $this->document = $document;
        $this->exchangerCode = $exchangerCode;
        $this->registryNumber = $registryNumber;
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

    /**
     * @throws EntityException
     */
    public function getRegistry() : Registry
    {
        return new Registry(
            $this->getInterested(),
            $this->getUnit(),
            $this->getRegistryOffice(),
            $this->getDocument(),
            null,
            $this->getExchangerCode(),
            $this->getRegistryNumber(),
            $this->getSubject()
        );
    }

}