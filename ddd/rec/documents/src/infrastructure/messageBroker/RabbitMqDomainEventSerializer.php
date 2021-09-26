<?php

namespace App\documents\infrastructure\messageBroker;

use App\documents\domain\shared\DomainEvent;

final class RabbitMqDomainEventSerializer
{
    public static function serialize(DomainEvent $domainEvent): string
    {
        return json_encode(
            [
                'data' => [
                    'id'          => $domainEvent->eventId(),
                    'type'        => $domainEvent->eventName(),
                    'occurred_on' => $domainEvent->occurredOn(),
                    'attributes'  => array_merge(
                        $domainEvent->toPrimitives(),
                        ['id' => $domainEvent->aggregateId()]
                    ),
                ],
                'meta' => [],
            ]
        );
    }
}