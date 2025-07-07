<?php

namespace App\Service;

use App\Service\TaxCalculatorInterface;

class TaxCalculator implements TaxCalculatorInterface
{
    private float $taxRate;

    public function __construct(float $taxRate = 1.2)
    {
        $this->taxRate = $taxRate;
    }

    public function calculate(float $price): float
    {
        return $price * $this->taxRate;
    }
}