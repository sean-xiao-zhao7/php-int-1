<?php

namespace Classes;

class DebtCollector implements DebtCollectorInterface
{
    public function collect(float $amount): float
    {
        return $amount * 0;
    }
}
