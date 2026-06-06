<?php

namespace Src\D\Correct;

class OrderManger
{
    private DatabaseDriver $databaseDriver;

    public function __construct(DatabaseDriver $databaseDriver)
    {
        $this->databaseDriver = $databaseDriver;
    }

    public function businessLogic(): bool
    {
        //do business logic

       return $this->databaseDriver->create('orders', []);
    }
}
