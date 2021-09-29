<?php

namespace App\registry\application\registry\create\command;

use App\registry\application\registry\create\CreateRegistry;
use App\registry\application\registry\create\dto\CreateRegistryRequest;
use App\registry\domain\command\CommandHandler;
use App\registry\domain\entity\RegistryNumber;
use App\registry\domain\repository\RegistryRepository;
use Doctrine\ORM\Tools\Console\Command\SchemaTool\CreateCommand;

class CreateRegistryCommandHandler implements CommandHandler
{

    private CreateRegistry $createRegistry;
    private RegistryRepository $registryRepository;

    /**
     * @param CreateRegistry $createRegistry
     * @param RegistryRepository $registryRepository
     */
    public function __construct(CreateRegistry $createRegistry, RegistryRepository $registryRepository)
    {
        $this->createRegistry = $createRegistry;
        $this->registryRepository = $registryRepository;
    }

    public function __invoke(CreateRegistryCommand $createRegistryCommand) {
        $registryNumber = new RegistryNumber();
        $createRegistryRequest = new CreateRegistryRequest(
            $createRegistryCommand->getType(),
            $createRegistryCommand->getInterested(),
            $createRegistryCommand->getUnit(),
            $createRegistryCommand->getRegistryOffice(),
            $createRegistryCommand->getDocument(),
            $createRegistryCommand->getExchangerCode(),
            $createRegistryCommand->getRegistryNumber(),
            $createRegistryCommand->getSubject()
        );

        $this->createRegistry(
            $createRegistryRequest,
            $this->registryRepository
        );
    }
}