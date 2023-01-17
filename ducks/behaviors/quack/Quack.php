<?php

namespace ducks\behaviors\quack;

class Quack implements QuackBehavior
{
    public function quack(): void
    {
        echo "Quack !\n";
    }
}
