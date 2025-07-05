<?php

namespace App;

class Cart
{
    public float $price;
    private float $tax = 1.2;

    public function getNetPrice(): float
    {
        return $this->price * $this->tax;
    }

    public function setTax(float $tax): void
    {
        $this->tax = $tax;
    }
}
