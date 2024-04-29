<?php

namespace Xi\Php\Interfaces;

interface DebtCollectorInterface
{
    public function collect(float $amount): float;
}
