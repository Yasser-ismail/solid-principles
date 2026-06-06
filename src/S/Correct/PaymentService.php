<?php

namespace Src\S\Correct;

use Src\S\Order;

class PaymentService
{
    public function processPayment(Order $order): void
    {
        echo "Payment Processed";
    }

}
