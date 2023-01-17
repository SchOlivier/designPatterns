<?php

namespace ducks\behaviors\fly;

class FlyWithWings implements FlyBehavior
{
    public function fly(): void
    {
        echo "flap flap\n";
    }
}
