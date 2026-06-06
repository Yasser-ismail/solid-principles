<?php

namespace Src\I\Correct;

interface Chargeable
{
    public function getTotalAmount(): float;

    public function charge(): void;
}
