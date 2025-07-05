<?php

namespace App\Tests;

use App\Cart;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    private Cart $cart;

    protected function setUp(): void
    {
        $this->cart = new Cart();
    }
    
    public function testNetPriceIsCalculatedCorrectly(): void
    {
        $this->cart->price = 10;

        $netPrice = $this->cart->getNetPrice();

        $this->assertEquals(12, $netPrice);
    }

    public function testTheCartTaxValueCanBeChangedStatically(): void
    {
        $this->cart->price = 10;

        $this->cart->setTax(1.5);
        $netPrice = $this->cart->getNetPrice();

        $this->assertEquals(15, $netPrice);
    }
}