<?php

include 'vehicles/Car.php';
include 'vehicles/Truck.php';
include 'vehicles/ToyCar.php';

use Vehicles\{Car, Truck, ToyCar};

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


echo '<br>';
echo '<hr>';
echo '<h2>Carro de juguete</h2>';
$toy =  new ToyCar('Boss');
$toy->move();