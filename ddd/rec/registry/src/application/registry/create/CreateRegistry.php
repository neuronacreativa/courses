<?php

namespace App\registry\application\registry\create;

use App\registry\application\registry\create\dto\CreateRegistryRequest;
use App\registry\application\registry\create\dto\CreateRegistryResponse;
use App\registry\domain\exception\EntityException;
use App\registry\domain\factory\RegistryFactory;
use App\registry\domain\repository\RegistryRepository;

class CreateRegistry
{

    private RegistryFactory $registryFactory;

    /**
     * @throws EntityException
     */
    public function __invoke(
        CreateRegistryRequest $createRegistryRequest,
        RegistryRepository  $registryRepository
    ) : CreateRegistryResponse {

        $registry = $this->registryFactory->getRegistry(
            $createRegistryRequest->getType(),
            $createRegistryRequest->getInterested(),
            $createRegistryRequest->getUnit(),
            $createRegistryRequest->getRegistryOffice(),
            $createRegistryRequest->getDocument(),
            $createRegistryRequest->getExchangerCode(),
            $createRegistryRequest->getRegistryNumber(),
            $createRegistryRequest->getSubject()
        );

        // $registry = $createRegistryRequest->getRegistry();
        $registryRepository->save($registry);

        return new CreateRegistryResponse($registry->getUuid());
    }
}