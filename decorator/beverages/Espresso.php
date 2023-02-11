<?php

namespace decorator\beverages;

class Espresso implements Beverage
{
    protected Size $size = Size::small;

    public function getDescription(): string
    {
        return $this->size->value . " Espresso";
    }

    public function getCost(): float
    {
        return 1.99;
    }

    public function getSize(): Size
    {
        return $this->size;
    }

    public function setSize(Size $size)
    {
        $this->size = $size;

        return $this;
    }
}
