<?php

require __DIR__ . '/../../../vendor/autoload.php';

function refund(\Src\I\Violation\PaymentInterface $gateway): void
{
    $gateway->refund();
}

refund(new \Src\I\Violation\CheckoutGateway()); //okay

//CryptoGateway is accepted, then throws at runtime inside refund().
refund(new \Src\I\Violation\CryptoGateway()); //boom
