<?php

namespace Src\L\Violation;

use Exception;

class Penguin extends Bird
{
    /**
     * this class violate the Likov substitution principle, if we replace this subclass with it's parent in the code
     * the behavior will change.
     */
    public function fly(): void
    {
        throw new Exception("I can't fly");
    }
}
