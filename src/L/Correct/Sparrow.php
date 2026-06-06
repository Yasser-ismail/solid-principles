<?php

namespace Src\L\Correct;

class Sparrow extends Bird implements Flyable
{
    public function fly(): void
    {
        echo "Flying";
    }
}
