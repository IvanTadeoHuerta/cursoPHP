<?php

include 'vehicles/Car.php';
include 'vehicles/Truck.php';

use Vehicles\{Car, Truck};

echo '<br>';

$car = new Car('Ivan Alejo');
$car->move();
echo 'Owner: '. $car->getOwner();

echo '<hr>';

$truck =  new Truck('Ivan Tadeo Huerta' , 'Pickup');
$truck->move();
echo 'Owner: '. $truck->getOwner();


echo '<br>';
$truck2 =  new Truck('Luis Tadeo Huerta' , 'Pickup 2');
$truck2->move();
echo 'Owner: '. $truck2->getOwner();

echo 'Cantidad de camionetas: ' . Truck::$count . '<br>';