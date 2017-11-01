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

	public function setOwner($owner){
		$this->owner = $owner;
	}

}

echo 'Class Car <br>';

$car = new Car();

$car->move();
$car->setOwner('Alejo tadeuz');
echo 'Owner: '. $car->getOwner();
