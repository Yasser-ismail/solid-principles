<?php

namespace Src\D\Correct;

class MySQLDriver implements DatabaseDriver
{
    public function create(string $tableName, array $fields): bool
    {
        return true;
    }
}
