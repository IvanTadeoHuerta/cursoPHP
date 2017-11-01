<?php

namespace Vehicles;
require_once 'VehicleBase.php';

class Car extends Vehicle{
	public function move(){
		echo $this->startEngine();
	}

	public function startEngine(){
		return 'Car: enciende auto';
	}
}



