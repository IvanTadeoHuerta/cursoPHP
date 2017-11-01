<?php

include 'vehicles/Car.php';
include 'vehicles/Truck.php';

use Vehicles\{Car, Truck};

echo '<br>';

$car = new Car('Ivan Alejo');
$car->move();


echo '<hr>';

$truck =  new Truck('Ivan Tadeo Huerta' , 'Pickup');
$truck->move();


echo '<br>';
echo '<h2><b>Utilizando serialize</b></h2>';

$var = serialize($car);
$newCar = unserialize($var);

echo 'New car owner: ' .$newCar->getOwner() . '<br>';


