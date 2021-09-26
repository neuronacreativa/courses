<?php

namespace App\documents\infrastructure\messageBroker;

use App\documents\domain\services\DomainEventPublisher;
use App\documents\domain\shared\DomainEvent;

class RabbitMqEventPublisher implements DomainEventPublisher
{
    private string $connection;
    private string $exchangeName;

    public function __construct($connection, $exchangeName)
    {
        $this->connection = $connection;
        $this->exchangeName = $exchangeName;
    }


    public function publish(DomainEvent ...$events): void
    {
        foreach ($events as $event) {
            $this->publishEvent($event);
        }
    }

    private function publishEvent(DomainEvent $event): void
    {
        // Creating event
        $body       = RabbitMqDomainEventSerializer::serialize($event);
        $routingKey = $event->eventName();
        $messageId  = $event->eventId();

        // Publishing to message broker
        $this->connection->exchange($this->exchangeName)->publish(
            $body,
            $routingKey,
            AMQP_NOPARAM,
            [
                'message_id'       => $messageId,
                'content_type'     => 'application/json',
                'content_encoding' => 'utf-8',
            ]
        );
    }

}