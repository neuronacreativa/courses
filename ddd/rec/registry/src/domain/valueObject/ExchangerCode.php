<?php

namespace App\registry\domain\entity;

use App\registry\domain\exception\EntityException;
use App\registry\domain\shared\ValueObject;

class ExchangerCode implements ValueObject
{

    private $exchangerCode;

    /**
     * @throws EntityException
     */
    public function __construct($exchangerCode) {
        if (empty($exchangerCode))
        {
            throw new EntityException("ExchangerCode is empty");
        }
        if (!preg_match('[a-zA-Z0-9]{8}', $exchangerCode) && strlen($exchangerCode) != 16)
        {
            throw new EntityException("ExchangerCode is not valid");
        }
        $this->exchangerCode = $exchangerCode;
    }

    /**
     * @return mixed
     */
    public function getExchangerCode()
    {
        return $this->exchangerCode;
    }

    function sameValueAs($other): bool
    {
        return $this->getExchangerCode() == $other->getExchangerCode();
    }
}