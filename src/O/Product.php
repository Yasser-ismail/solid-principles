<?php

namespace Src\O;


class Product
{
    public function getCategory(): string
    {
        return "Category";
    }

    public function getPrice(): float
    {
        return random_int(10, 1000);
    }
}
