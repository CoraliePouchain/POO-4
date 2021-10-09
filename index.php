<?php

require_once './Bicycle.php';
require_once './Car.php';


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





