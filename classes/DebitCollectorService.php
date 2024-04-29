<?php

namespace Xi\Php;

class DebitCollectorService
{
    public function collect(DebtCollector $collector): void
    {
        $amount = mt_rand(100, 1000);
        $result = $collector->collect($amount);

        echo 'Collected $' . $result . ' out of $' . $amount . PHP_EOL;
    }
}
