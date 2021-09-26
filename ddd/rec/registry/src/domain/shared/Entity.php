<?php

namespace App\registry\domain\shared;

interface Entity
{
    /**
     * Entities compare by identity, not by attributes.
     *
     * @param $other
     * The other entity.
     * @return bool
     * True if the identities are the same, regardless of other attributes.
     */
    function sameIdentityAs($other): bool;
}