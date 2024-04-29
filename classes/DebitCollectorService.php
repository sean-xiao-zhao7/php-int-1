<?php

namespace Xi\Php;

class DebitCollectorService
{
    public function collect(DebtCollector $collector): string
    {
        $amount = mt_rand(100, 1000);
        $result = $collector->collect($amount);

        return 'Collected $' . $result . ' out of $' . $amount . PHP_EOL;
    }
}
