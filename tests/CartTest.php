<?php

use App\Cart;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    public function testNetPriceIsCalculatedCorrectly(): void
    {
        
        $cart = new Cart();
        $cart->price = 10;

       
        $netPrice = $cart->getNetPrice();

        $this->assertEquals(12, $netPrice);
    }
}