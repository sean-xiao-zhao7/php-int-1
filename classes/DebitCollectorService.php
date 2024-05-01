<?php

namespace Xi\Php;

use Xi\Php\Interfaces\DebtCollectorInterface;
use Xi\Php\Exceptions\DebtCollectionAmountInvalidException;

class DebitCollectorService
{
    public function collect(DebtCollectorInterface $collector): string
    {
        $amount = mt_rand(-1000, 1000);

        try {
            $result = $collector->collect($amount);
        } catch (DebtCollectionAmountInvalidException) {
            return 'Amount $' . $amount . ' is invalid.' . PHP_EOL;
        }

        return 'Collected $' . $result . ' out of $' . $amount . PHP_EOL;
    }
}
