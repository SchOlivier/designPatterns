<?php

require '../classLoader.php';

use decorator\beverages\Decaf;
use decorator\beverages\Espresso;
use decorator\condiments\Mocha;
use decorator\condiments\Whip;

// Factory and Builder patterns should make decorator object creation better.
// Simple espresso
$beverage = new Espresso;
echo $beverage->getDescription() . " : " . $beverage->getCost() . "€\n";

// decaf with Mocha and whip
$beverage = new Decaf;
$beverage = new Mocha($beverage);
$beverage = new Whip($beverage);
echo $beverage->getDescription() . " : " . $beverage->getCost() . "€\n";
