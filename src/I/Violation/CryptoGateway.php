<?php

namespace Src\I\Violation;

use Exception;

class CryptoGateway implements PaymentInterface
{
    public function getTotalAmount(): float
    {
        return random_int(10, 1000);
    }

    public function charge(): void
    {
        echo "Charged";
    }

    /**
     * The fat PaymentInterface forces CryptoGateway to have a refund().
     */
    public function refund(): void
    {
        throw new Exception("Crypto is not supported yet");
    }
}
