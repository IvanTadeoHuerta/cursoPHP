<?php

namespace Vehicles;
require 'VehicleBase.php';

class Car extends Vehicle{
	public function move(){
		echo 'Car: moving <br>';
	}
}



