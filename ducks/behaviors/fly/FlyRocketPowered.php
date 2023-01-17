<?php

namespace ducks\behaviors\fly;

class FlyRocketPowered implements FlyBehavior
{
    public function fly(): void
    {
        echo "Houston, we have lift off!\n";
    }
}
