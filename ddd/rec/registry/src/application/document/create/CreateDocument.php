<?php

namespace App\registry\application\document\create;

use App\registry\application\document\create\dto\CreateDocumentResponse;
use App\registry\domain\repository\DocumentRepository;

class CreateDocument
{
    public function __invoke(
        CreateDocumentRequest $createDocumentRequest,
        DocumentRepository $documentRepository
    ) : CreateDocumentResponse
    {

        $document = $createDocumentRequest->getDocument();

        // Saving document
        $documentRepository->save($document);

        return new CreateDocumentResponse(
            $document->getUuid(),
            $document->getLocation()
        );
    }
}