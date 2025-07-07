<?php

namespace App;

use App\Service\TaxCalculatorInterface;

class Cart
{
    public float $price;
    private TaxCalculatorInterface $taxCalculator;

    public function __construct(TaxCalculatorInterface $taxCalculator)
    {
        $this->taxCalculator = $taxCalculator;
    }

    public function getNetPrice(): float
    {
        return $this->taxCalculator->calculate($this->price);
    }
}
