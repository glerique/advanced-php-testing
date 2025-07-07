<?php

namespace App\Service;

interface TaxCalculatorInterface
{
    public function calculate(float $price): float;
}
