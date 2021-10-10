<?php

require_once './Bicycle.php';
require_once './Car.php';
require_once './Truck.php';

/*
//instanciation de la classe Bicycle.php

$bike = new Bicycle('blue');
var_dump($bike);
$bike->dump();

$bike->setCurrentSpeed(0);

var_dump($bike);

echo $bike->forward();
echo '<br> Vitesse du vélo :' . $bike->getCurrentSpeed() . 'km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo :' . $bike->getcurrentSpeed() . 'km/h' . '<br>';
echo $bike->brake();

$rockrider = new Bicycle('yellow');

$tornado = new Bicycle('black');


// instanciation de la classe Car.php
$homerSedan = new Car('pink', 5, 'Gasoline');
var_dump($homerSedan);

echo $homerSedan->start() . '<br>';
echo 'Vitesse actuelle: ' . $homerSedan->getCurrentSpeed() . 'km/h' . '<br>';
echo $homerSedan->forward() . '<br>';
echo $homerSedan->getCurrentSpeed() . 'km/h' . '<br>';
echo $homerSedan->brake() . '<br>';
echo 'Vitesse actuelle: ' . $homerSedan->getCurrentSpeed() . 'km/h' . '<br>';

$krustyPorsche = new Car('silver', 2, 'Gasoline');
var_dump($krustyPorsche);

echo $krustyPorsche->getColor();


$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);


var_dump(Vehicle::ALLOWED_ENERGIES);
*/


$monsterTruck = new Truck(10, 'blue', 2, 'fuel');
var_dump($monsterTruck);

$monsterTruck->setLoad(0);
echo $monsterTruck->getLoad() . '<br>';

echo $monsterTruck->isFull() . '<br>';
echo $monsterTruck->forward() . '<br>';
echo 'Vitesse actuelle: ' . $monsterTruck->getCurrentSpeed() . 'km/h' . '<br>';
echo $monsterTruck->brake() . '<br>';
echo 'Vitesse actuelle: ' . $monsterTruck->getCurrentSpeed() . 'km/h' . '<br>';

// Instanciation $tractor
$tractor = new Truck(15, 'yellow', 1, 'fuel');
var_dump($tractor);

$tractor->setLoad(0);
echo $tractor->getLoad() . '<br>';

echo $tractor->isFull() . '<br>';
echo $tractor->forward() . '<br>';
echo 'Vitesse actuelle: ' . $tractor->getCurrentSpeed() . 'km/h' . '<br>';
echo $tractor->brake() . '<br>';
echo 'Vitesse actuelle: ' . $tractor->getCurrentSpeed() . 'km/h' . '<br>';







