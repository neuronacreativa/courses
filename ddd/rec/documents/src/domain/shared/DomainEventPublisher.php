<?php

namespace App\documents\domain\services;

use App\documents\domain\shared\DomainEvent;

interface DomainEventPublisher
{
    public function publish(DomainEvent ...$events): void;
}