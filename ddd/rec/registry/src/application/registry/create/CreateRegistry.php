<?php

namespace App\registry\application\registry\create;

use App\registry\application\registry\create\dto\CreateRegistryRequest;
use App\registry\application\registry\create\dto\CreateRegistryResponse;
use App\registry\domain\exception\EntityException;
use App\registry\domain\repository\RegistryRepository;

class CreateRegistry
{

    /**
     * @throws EntityException
     */
    public function __invoke(
        CreateRegistryRequest $createRegistryRequest,
        RegistryRepository  $registryRepository
    ) : CreateRegistryResponse {

        $registry = $createRegistryRequest->getRegistry();
        $registryRepository->save($registry);

        return new CreateRegistryResponse($registry->getUuid());
    }
}