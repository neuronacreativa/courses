<?php

namespace App\registry\infrastructure\rest\controller;

use App\registry\application\registry\create\CreateRegistry;
use App\registry\application\registry\create\dto\CreateRegistryRequest;
use App\registry\infrastructure\persistence\repository\registry\MySqlRegistryRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class RegistryController
 * @package App\Controller
 *
 * @Route(path="/api/")
 */
class RegistryController
{

    private CreateRegistry $createRegistry;
    private MySqlRegistryRepository $mySqlRegistryRepository;

    /**
     * @param CreateRegistry $createRegistry
     * @param MySqlRegistryRepository $mySqlRegistryRepository
     */
    public function __construct(
        CreateRegistry $createRegistry,
        MySqlRegistryRepository $mySqlRegistryRepository
    )
    {
        $this->createRegistry = $createRegistry;
        $this->mySqlRegistryRepository = $mySqlRegistryRepository;
    }

    /**
     * @Route("registry/", name="create_one_registry", methods={"POST"})
     */
    public function create(
        CreateRegistryRequest $createRegistryRequest
    ): JsonResponse
    {

        $createRegistryResponse = $this->createRegistry(
            $createRegistryRequest,
            $this->mySqlRegistryRepository
        );

        return new JsonResponse($createRegistryResponse, Response::HTTP_OK);
    }
}