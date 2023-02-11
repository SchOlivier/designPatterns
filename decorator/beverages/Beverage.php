<?php

namespace decorator\beverages;

interface Beverage
{
    public function getCost(): float;
    public function setSize(Size $size);
    public function getSize(): Size;
    public function getDescription(): string;
}
