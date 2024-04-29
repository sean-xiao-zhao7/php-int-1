<?php

namespace Xi\Php;

use \Xi\Php\Interfaces\DebtCollectorInterface;

class DebtCollector implements DebtCollectorInterface
{
    public function collect(float $amount): float
    {
        return mt_rand((int) ($amount * 0.5), (int) $amount);
    }
}
