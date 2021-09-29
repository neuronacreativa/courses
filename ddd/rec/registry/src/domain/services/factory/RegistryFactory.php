<?php

namespace App\registry\domain\factory;

use App\registry\domain\entity\Document;
use App\registry\domain\entity\ExchangerCode;
use App\registry\domain\entity\InRegistry;
use App\registry\domain\entity\Interested;
use App\registry\domain\entity\OutRegistry;
use App\registry\domain\entity\Registry;
use App\registry\domain\entity\RegistryOffice;
use App\registry\domain\entity\Unit;
use App\registry\domain\exception\EntityException;

class RegistryFactory
{
    /**
     * @throws EntityException
     */
    function getRegistry(
        $type,
        Interested $interested,
        Unit $unit,
        RegistryOffice $registryOffice,
        Document $document,
        ExchangerCode $exchangerCode,
        $registryNumber,
        $subject
    ) : Registry
    {
        switch ($type) {
            case 'IN':
                return new InRegistry(
                    $interested,
                    $unit,
                    $registryOffice,
                    $document,
                    $exchangerCode,
                    $registryNumber,
                    $subject
                );
            case 'OUT':
                return new OutRegistry(
                    $interested,
                    $unit,
                    $registryOffice,
                    $document,
                    $exchangerCode,
                    $registryNumber,
                    $subject
                );
        }

        throw new EntityException("Type not valid");
    }
}