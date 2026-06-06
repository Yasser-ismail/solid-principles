<?php

require __DIR__ . '/../../../vendor/autoload.php';

function refund(\Src\I\Correct\Refundable $gateway): void
{
    $gateway->refund();
}

refund(new \Src\I\Correct\CheckoutGateway()); //okay

//CryptoGateway can't even be passed to refund(Refundable $gateway)
//refund(new \Src\I\Correct\CryptoGateway()); // TypeError — CryptoGateway is not Refundable, rejected at the boundary.
