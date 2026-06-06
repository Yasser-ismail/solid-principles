<?php

namespace Src\I\Correct;

class CryptoGateway implements Chargeable
{
    public function getTotalAmount(): float
    {
        return random_int(10, 1000);
    }

    public function charge(): void
    {
        echo "Charged";
    }
}
