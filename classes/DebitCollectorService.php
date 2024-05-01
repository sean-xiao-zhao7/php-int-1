<?php

namespace Xi\Php;

use Xi\Php\Interfaces\DebtCollectorInterface;

class DebitCollectorService
{
    public function collect(DebtCollectorInterface $collector): string
    {
        $amount = -10; // mt_rand(100, 1000);
        $result = $collector->collect($amount);

        return 'Collected $' . $result . ' out of $' . $amount . PHP_EOL;
    }
}
