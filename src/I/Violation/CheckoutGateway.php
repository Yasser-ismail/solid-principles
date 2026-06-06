<?php

namespace Src\I\Violation;

class CheckoutGateway implements PaymentInterface
{
    public function getTotalAmount(): float
    {
        return random_int(10, 1000);
    }

    public function charge(): void
    {
        echo "Charged";
    }

    public function refund(): void
    {
        echo "Refunded";
    }
}
