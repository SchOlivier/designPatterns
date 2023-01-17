<?php

namespace ducks\behaviors\quack;

class MuteQuack implements QuackBehavior
{
    public function quack(): void
    {
        echo "...\n";
    }
}
