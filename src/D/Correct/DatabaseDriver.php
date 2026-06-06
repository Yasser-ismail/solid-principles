<?php

namespace Src\D\Correct;

interface DatabaseDriver
{
    public function create(string $tableName, array $fields): bool;
}
