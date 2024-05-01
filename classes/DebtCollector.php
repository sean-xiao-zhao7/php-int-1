<?php

namespace Xi\Php;

use \Xi\Php\Interfaces\DebtCollectorInterface;
use \Xi\Php\Exceptions\DebtCollectionAmountInvalidException;

class DebtCollector implements DebtCollectorInterface
{
    public function collect(float $amount): float
    {
        if ($amount <= 0.0) {
            throw new DebtCollectionAmountInvalidException();
        }
        return mt_rand((int) ($amount * 0.5), (int) $amount);
    }
}
