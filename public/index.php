<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Cart;
use App\Service\TaxCalculator;


$cart = new Cart(new TaxCalculator(1.2));
$cart->price = 10;
echo $cart->getNetPrice();