<?php

namespace Vehicles;
require_once 'VehicleBase.php';

class Car extends Vehicle{
	public function move(){
		echo 'Car: moving <br>';
	}
}



