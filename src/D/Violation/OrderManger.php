<?php

namespace Src\D\Violation;

class OrderManger
{
    public function businessLogic(): bool
    {
        $databasesDriver = new MySQLDriver();
        //do business logic

       return $databasesDriver->create('orders', []);
    }
}
