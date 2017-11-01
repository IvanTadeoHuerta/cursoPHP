<?php

class Car
{
	private $owner = 'Ivan Tadeo Huerta';

	public function move(){
		echo 'moving <br>';
	}

	public function getOwner(){
		return $this->owner;
	}

}

echo 'Class Car <br>';

$car = new Car();

$car->move();
echo 'Owner: '. $car->getOwner();
