<?php

namespace Vehicles;
require_once 'VehicleBase.php';

class ToyCar extends Vehicle {
	private $owner = 'Toy';

	public function __construct($owner){
		parent::__construct($owner);
		$this->owner = $owner;
		echo $this->owner;
	}

	public function move(){
		echo $this->startEngine();
	}

	public function startEngine(){
		throw new  \Exception('Engine not found');
		
	}

}



