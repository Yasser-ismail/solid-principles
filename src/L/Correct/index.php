<?php
require __DIR__ . '/../../../vendor/autoload.php';

function makeBirdsFly(\Src\L\Correct\Flyable $bird): void
{
    $bird->fly();
}

makeBirdsFly(new \Src\L\Correct\Sparrow()); // child replaced the parent successfully / behaviour remains as expected