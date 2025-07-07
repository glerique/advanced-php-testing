<?php

namespace App\Tests;

use App\Service\TaxCalculator;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

class TaxCalculatorTest extends TestCase
{
    #[DataProvider('taxProvider')]
    public function testCalculate(float $taxRate, float $price, float $expected): void
    {
        $taxCalculator = new TaxCalculator($taxRate);
        $this->assertEquals($expected, $taxCalculator->calculate($price));
    }

    public static function taxProvider(): array
    {
        return [
            'default rate' => [1.2, 10.0, 12.0],
            'custom rate'  => [1.5, 10.0, 15.0],
            'zero price'   => [1.2, 0.0, 0.0],
        ];
    }
}
