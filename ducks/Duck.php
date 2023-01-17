<?php

namespace ducks;

use ducks\behaviors\fly\FlyBehavior;
use ducks\behaviors\quack\QuackBehavior;

abstract class Duck
{
    protected FlyBehavior $flyBehavior;
    protected QuackBehavior $quackBehavior;

    abstract public function display(): void;

    public function swim(): void
    {
        echo "splash\n";
    }

   final public function performFly(): void
    {
        $this->flyBehavior->fly();
    }

    final public function performQuack(): void
    {
        $this->quackBehavior->quack();
    }

    public function setFlyBehavior(FlyBehavior $flyBehavior): self
    {
        $this->flyBehavior = $flyBehavior;

        return $this;
    }

    public function setQuackBehavior(QuackBehavior $quackBehavior): self
    {
        $this->quackBehavior = $quackBehavior;

        return $this;
    }
}
