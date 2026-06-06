<?php

namespace Src\I\Violation;
interface PaymentInterface
{
    public function getTotalAmount(): float;

    public function charge(): void;

    public function refund(): void;
}
