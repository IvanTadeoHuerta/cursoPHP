<?php

namespace Vehicles;
require_once 'VehicleBase.php';
/* la diagonal invertida le dce a php que serializable no forma parte
 * del namespace actual. Indica que forma parte del namespace global
 */
class Car extends Vehicle implements \Serializable{
	private $owner = 'Ejemplo propietario';
	public function move(){
		echo $this->startEngine();
	}

	public function startEngine(){
		return 'Car: enciende auto';
	}

	public function serialize(){
		echo 'Serializable <br>';
		return $this->owner;
	}

	public function unserialize($serialize){
		echo 'unserialize <br>';
		$this->owner = $serialize;
	}
}



