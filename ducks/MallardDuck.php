<?php

namespace ducks;

use ducks\behaviors\fly\FlyWithWings;
use ducks\behaviors\quack\Quack;

class MallardDuck extends Duck 
{
    public function __construct()
    {
        $this->flyBehavior = new FlyWithWings;
        $this->quackBehavior = new Quack;
    }

    public function display(): void
    {
        echo "I'm a mallard duck! Duck Yeah!\n";
    }
}