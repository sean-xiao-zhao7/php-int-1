<?php

namespace Classes;

interface DebtCollectorInterface
{
    public function collect(float $amount): float;
}
