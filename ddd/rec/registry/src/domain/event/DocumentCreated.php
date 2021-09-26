<?php

namespace App\registry\domain\event;

use App\registry\domain\entity\Document;
use App\registry\domain\shared\DomainEvent;

class DocumentCreated implements DomainEvent
{

    private Document $document;

    /**
     * @param Document $document
     */
    public function __construct(Document $document)
    {
        $this->document = $document;
    }

    /**
     * @return Document
     */
    public function getDocument(): Document
    {
        return $this->document;
    }

    function sameEventAs($other): bool
    {
        return true;
    }

    function occurredOn()
    {
        return new DateTime();
    }

    function eventName()
    {
        return "document.created";
    }

    function eventId()
    {
        return "Valid unique Id";
    }

    function toPrimitives()
    {
        return "Array containing Document attributes values";
    }

    function aggregateId()
    {
        return $this->document->getUuid();
    }
}