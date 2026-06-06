<?php

require __DIR__ . '/../../../vendor/autoload.php';

function makeBirdsFly(\Src\L\Violation\Bird $bird): void
{
    $bird->fly();
}

makeBirdsFly(new \Src\L\Violation\Bird()); // parent
makeBirdsFly(new \Src\L\Violation\Sparrow()); // child replaced the parent successfully / behaviour remains as expected
makeBirdsFly(new \Src\L\Violation\Penguin()); // boom
