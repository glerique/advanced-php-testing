<?php

namespace App\Tests;

use App\Cart;
use App\Service\TaxCalculatorInterface;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    private $taxCalculator;
    private Cart $cart;

    protected function setUp(): void
    {
        $this->taxCalculator = $this->createMock(TaxCalculatorInterface::class);
        $this->cart = new Cart($this->taxCalculator);
    }

    public function testNetPriceIsCalculatedCorrectly(): void
    {
        
        $this->taxCalculator->method('calculate')->willReturn(12.0);
        $this->cart->price = 10;

        $this->assertEquals(12, $this->cart->getNetPrice());
    }

    public function testNetPriceWithDifferentTaxRate(): void
    {
        
        $this->taxCalculator->method('calculate')->willReturn(15.0);
        $this->cart->price = 10;

        $this->assertEquals(15, $this->cart->getNetPrice());
    }
}