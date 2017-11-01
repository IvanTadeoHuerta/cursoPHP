<?php

namespace Vehicles;

require_once 'VehicleBase.php';

class Truck extends Vehicle{
	private $type;
	public static $count=0;

	public function __construct($owner, $type){
		$this->type = $type;
		parent::__construct($owner);

		self::$count++;
	}

	public function move(){
		echo $this->startEngine();
	}

	public function startEngine(){
		return 'Truck: enciende camioneta';
	}

}
