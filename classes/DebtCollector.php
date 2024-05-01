<?php

namespace Xi\Php;

use \Xi\Php\Interfaces\DebtCollectorInterface;

class DebtCollector implements DebtCollectorInterface
{
    public function collect(float $amount): float
    {
        if ($amount <= 0.0) {
            throw new \InvalidArgumentException("Amount must be more than 0.");
        }
        return mt_rand((int) ($amount * 0.5), (int) $amount);
    }
}
