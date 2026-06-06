<?php

namespace Src\D\Correct;

class MongoDriver implements DatabaseDriver
{
    public function create(string $tableName, array $fields): bool
    {
        return true;
    }
}
