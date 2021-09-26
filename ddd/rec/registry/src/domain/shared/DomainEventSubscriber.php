<?php

namespace App\registry\domain\shared;

interface DomainEventSubscriber
{
    public static function subscribedTo(): array;
}