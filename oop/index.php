<?php

class Vehicle
{
	private $owner = 'Ivan Tadeo Huerta';

	public function __construct($owner){
		$this->owner = $owner;
	}

	/*
	 * __destruct se utiliza generalmente para liberar un recurso o limpiar algo
	 * en el script
	 *
	 */
	public function __destruct(){
		echo 'destructor<br>';
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

class Car extends Vehicle{
	public function move(){
		echo 'Car: moving <br>';
	}
}

class Truck extends Vehicle{
	private $type;

	public function __construct($owner, $type){
		$this->type = $type;
		parent::__construct($owner);
	}

	public function move(){
		echo 'Truck '. $this->type .' moving <br>';
	}

}

echo '<br>';

$car = new Car('Ivan Alejo');
$car->move();
echo 'Owner: '. $car->getOwner();

echo '<hr>';

$truck =  new Truck('Ivan Tadeo Huerta' , 'Pickup');
$truck->move();
echo 'Owner: '. $truck->getOwner();
