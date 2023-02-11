<?php

namespace decorator\condiments;

use decorator\beverages\Beverage;

abstract class CondimentDecorator implements Beverage{
    
    protected Beverage $beverage;
}