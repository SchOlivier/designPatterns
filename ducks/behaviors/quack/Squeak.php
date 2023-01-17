<?php

namespace ducks\behaviors\quack;

class Squeak implements QuackBehavior
{
    public function quack(): void
    {
        echo "Squeak !\n";
    }
}
