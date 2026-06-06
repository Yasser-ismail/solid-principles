<?php

namespace Src\O\Correct;

use Src\O\Product;

class DiscountCalculator
{
    private DiscountStrategy $strategy;

    public function __construct(DiscountStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function calculateDiscount(Product $product): float
    {
        return  $this->strategy->getDiscount($product);
    }
}
