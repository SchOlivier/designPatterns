<?php

use ducks\behaviors\fly\FlyRocketPowered;
use ducks\MallardDuck;
use ducks\ModelDuck;

require 'classLoader.php';

$mallard = new MallardDuck;
$mallard->display();
$mallard->performQuack();
$mallard->performFly();

echo "\n\n";
$model = new ModelDuck;
$model->display();
$model->performQuack();
$model->performFly();
echo "Installing booster rocket...\n";
$model->setFlyBehavior(new FlyRocketPowered);
$model->performFly();
