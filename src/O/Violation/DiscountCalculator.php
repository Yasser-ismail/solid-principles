<?php

namespace Src\O\Violation;

use Src\O\Product;

class DiscountCalculator
{
    /**
     * This class && method violate the o/p principle because if we need to add a new discount strategy for new category of products
     * we will modify this class and this method, so our code isn't open for extension.
     */
    public function calculateDiscount(Product $product): float
    {
       return match ($product->getCategory())
        {
          'ELECTRONICS' => $product->getPrice() * .1,
          'CLOTHES' => $product->getPrice() * .2,
          default => 0
        };
    }
}
