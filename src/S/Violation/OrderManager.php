<?php

namespace Src\S\Violation;

use Src\S\Order;

class OrderManager
{
    public function processOrder(array $data): void
    {
        echo "Order Processed";
    }


    public function processPayment(Order $order): void
    {
        echo "Payment Processed";
    }

    public function sendNotification(string $email, string $message): void
    {
        echo "Notification sent";
    }
}
