<?php

namespace ducks;

use ducks\behaviors\fly\CantFly;
use ducks\behaviors\quack\Quack;

class ModelDuck extends Duck 
{
    public function __construct()
    {
        $this->flyBehavior = new CantFly;
        $this->quackBehavior = new Quack;
    }

    public function display(): void
    {
        echo "I'm a fake duck!\n";
    }
}