<?php

namespace Src\O\Correct;

use Src\O\Product;

interface DiscountStrategy
{
    public function getDiscount(Product $product): float;
}
