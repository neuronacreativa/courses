<?php

namespace App\registry\infrastructure\rest\controller;

use App\registry\application\registry\create\command\CreateRegistryCommand;
use App\registry\application\registry\create\command\CreateRegistryCommandHandler;
use App\registry\application\registry\create\CreateRegistry;
use App\registry\application\registry\create\dto\CreateRegistryResponse;
use App\registry\domain\entity\Document;
use App\registry\domain\entity\Interested;
use App\registry\domain\entity\RegistryOffice;
use App\registry\domain\entity\Unit;
use App\registry\infrastructure\persistence\repository\registry\MySqlRegistryRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

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
        $type,
        Interested $interested,
        Unit $unit,
        RegistryOffice $registryOffice,
        Document $document,
        $exchangerCode,
        $registryNumber,
        $subject
    ): JsonResponse
    {

        // actualmente estamos llamando al caso de uso
        // Si queremos montar CQRS, tendríamos que llamar al Command Handler asociado a la acción
        // que queremos ejecutar

        // Primero creamos el CreateRegistryCommand, a partir de nuestro DTO de Controlador
        // Este CreateRegistryCommand debe contener los tipos primitivos de todos los atributos
        // necesarios para generar un objeto de entrada para nuestro caso de uso CreateRegistry
        //
        // Después creamos nuestro CreateRegistryCommandHandler
        // Este objeto creará transformará los datos primitivos del CreateRegistryCommand
        // al objeto de entrada de nuestro caso de uso CreateRegistry, e invocará al
        // caso de uso después de crearlos
        //
        // Por último, llamaremos al CreateRegistryCommandHandler, no llamamos directamente al caso de uso.
        $createRegistryCommandHandler = new CreateRegistryCommandHandler(
            $this->createRegistry,
            $this->mySqlRegistryRepository
        );

        $command = new CreateRegistryCommand(
            $type,
            $interested,
            $unit,
            $registryOffice,
            $document,
            $exchangerCode,
            $registryNumber,
            $subject
        );
        $createRegistryCommandHandler(
            $command
        );

        /*
        $createRegistryResponse = $this->createRegistry(
            $createRegistryRequest,
            $this->mySqlRegistryRepository
        );*/

        $createRegistryResponse = new CreateRegistryResponse(
            $command
        );

        // TODO: Crear id para la identidad del agregado e inyectarlo al command para persistirlo en la entidad
        // TODO: Nuestra respuesta se implementará con el id generado en el command

        return new JsonResponse($createRegistryResponse, Response::HTTP_OK);
    }
}