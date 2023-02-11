<?php

namespace decorator\condiments;

use decorator\beverages\Beverage;
use decorator\beverages\Size;

class Whip extends CondimentDecorator
{
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', Whip';
    }

    public function getCost(): float
    {
        $cost = $this->beverage->getCost();
        switch($this->beverage->getSize()){
            case Size::small:
                $cost += 0.10;
                break;
            case Size::medium:
                $cost += 0.15;
                break;
            case Size::large:
                $cost += 0.20;
                break;
        }
        return $cost;
    }

    public function getSize(): Size
    {
        return $this->beverage->getSize();
    }

    public function setSize(Size $size)
    {
        $this->beverage->setSize($size);
    }
}
