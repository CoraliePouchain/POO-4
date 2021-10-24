<?php

require_once './Vehicle/Car.php';

$car = new Car('green', 4, 'electric');
echo $car->setHasParkBrake(false);

try {
    echo $car->start();
} catch(Exception $e) {
    echo 'Exception received: '. $e->getMessage();
} finally {
    echo 'Ma voiture roule comme un donut';
}





