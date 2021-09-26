<?php

use App\registry\application\document\create\CreateDocument;
use App\registry\application\document\create\CreateDocumentRequest;
use App\registry\domain\event\DocumentCreated;
use App\registry\domain\shared\DomainEventSubscriber;

class RabbitMqDocumentCreatedEventSubscriber implements DomainEventSubscriber
{

    private CreateDocument $createDocument;

    /**
     * @param CreateDocument $createDocument
     */
    public function __construct(CreateDocument $createDocument)
    {
        $this->createDocument = $createDocument;
    }

    public static function subscribedTo(): array
    {
        return [DocumentCreated::class];
    }

    public function __invoke(DocumentCreated $documentCreated): void
    {
        $this->createDocument(
            new CreateDocumentRequest(
                $documentCreated->aggregateId()
            )
        );
    }
}