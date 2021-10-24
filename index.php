<?php

require_once './Vehicle/Car.php';

$car = new Car('green', 4, 'electric');
echo $car->setHasParkBrake(true);

echo $car->start();







