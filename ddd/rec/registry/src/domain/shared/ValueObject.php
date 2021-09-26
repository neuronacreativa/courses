<?php

namespace App\registry\domain\shared;

interface ValueObject
{
    /**
     * Value objects compare by the values of their attributes, they don't have an identity.
     *
     * @param $other
     * The other value object
     * @return bool
     * if the given value object's and this value object's attributes are the same.
     */
    function sameValueAs($other): bool;
}