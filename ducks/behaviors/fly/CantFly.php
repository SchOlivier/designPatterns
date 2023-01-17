<?php

namespace ducks\behaviors\fly;

class CantFly implements FlyBehavior
{
    public function fly(): void
    {
        echo "I'm afraid of heights\n";
    }
}
