<?php

namespace App\registry\domain\shared;

interface DomainEvent
{
    /**
     * @param $other
     * The other domain event.
     * @return bool
     * if the given domain event and this event
     * are regarded as being the same event.
     */
    function sameEventAs($other): bool;

    /**
     * Retrieves the event occurred date
     *
     * @return mixed
     */
    function occurredOn();

    /**
     * Retrieves the full qualified event name
     *
     * @return mixed
     */
    function eventName();

    /**
     * Retrieves event unique Id
     *
     * @return mixed
     */
    function eventId();

    /**
     * Retrieves aggregate value in primitives values
     *
     * @return mixed
     */
    function toPrimitives();

    /**
     * Retrieves aggregate unique Id
     *
     * @return mixed
     */
    function aggregateId();
}