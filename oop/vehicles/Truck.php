<?php

namespace Vehicles;

require 'VehicleBase.php';

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
