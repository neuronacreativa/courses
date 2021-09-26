<?php

namespace App\documents\application\document\create;

use App\documents\application\document\create\dto\CreateDocumentResponse;
use App\documents\domain\entity\Document;
use App\documents\domain\repository\DocumentRepository;
use App\documents\domain\services\DomainEventPublisher;
use App\documents\domain\event\DocumentCreated;

class CreateDocument
{
    public function __invoke(
        CreateDocumentRequest $createDocumentRequest,
        DocumentRepository $documentRepository,
        DomainEventPublisher $domainEventPublisher
    ) : CreateDocumentResponse
    {

        $document = $createDocumentRequest->getDocument();

        // Saving document
        $documentRepository->save($document);

        // Publishing created document event
        $domainEventPublisher->publish(
            new DocumentCreated(
                $document
            )
        );

        return new CreateDocumentResponse(
            $document->getUuid(),
            $document->getLocation()
        );
    }
}