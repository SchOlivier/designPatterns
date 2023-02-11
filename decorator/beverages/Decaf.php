<?php

namespace decorator\beverages;

class Decaf implements Beverage
{
    protected Size $size = Size::small;

    public function getDescription(): string
    {
        return $this->size->value . " Decaf";
    }

    public function getCost(): float
    {
        return 1.05;
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
