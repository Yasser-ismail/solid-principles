<?php

namespace Src\O\Correct;

use Src\O\Product;

class ClothesDiscountStrategy implements DiscountStrategy
{
    public function getDiscount(Product $product): float
    {
        return  $product->getPrice() * .2;
    }
}
