<?php

namespace Src\O\Correct;

use Src\O\Product;

class ElectronicDiscountStrategy implements DiscountStrategy
{
    public function getDiscount(Product $product): float
    {
        return  $product->getPrice() * .1;
    }
}
