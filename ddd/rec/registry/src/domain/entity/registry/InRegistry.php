<?php

namespace App\registry\domain\entity;

use App\registry\domain\exception\EntityException;

class InRegistry extends Registry
{
    /**
     * @param Interested $interested
     * @param Unit $unit
     * @param RegistryOffice $registryOffice
     * @param Document $document
     * @param ExchangerCode $exchangerCode
     * @param $registryNumber
     * @param $subject
     * @throws EntityException
     */
    public function __construct(
        Interested $interested,
        Unit $unit,
        RegistryOffice $registryOffice,
        Document $document,
        ExchangerCode $exchangerCode,
        $registryNumber,
        $subject
    )
    {
        // TODO: Al menos un interesado
        // TODO: Registry number de tipo Entrada
        parent::__construct(
            $interested,
            $unit,
            $registryOffice,
            $document,
            null,
            $exchangerCode,
            $registryNumber,
            $subject
        );
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    public function inRegistryThings() {

    }

}