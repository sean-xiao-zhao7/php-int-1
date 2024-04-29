<?php

namespace Xi\Php;

class DebtCollector implements \Xi\Php\Interfaces\DebtCollectorInterface
{
    public function collect(float $amount): float
    {
        return mt_rand($amount * 0.5, $amount);
    }
}
