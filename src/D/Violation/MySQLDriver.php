<?php

namespace Src\D\Violation;

class MySQLDriver
{
    public function create(string $tableName, array $fields): bool
    {
        return true;
    }
}
