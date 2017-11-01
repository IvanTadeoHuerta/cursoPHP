<?php

class Car
{
	private $owner = 'Ivan Tadeo Huerta';

	public function __construct($owner){
		$this->owner = $owner;
		echo '__construct<br>';
	}

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

$car = new Car('Ivan Alejo');

$car->move();

echo 'Owner: '. $car->getOwner();
