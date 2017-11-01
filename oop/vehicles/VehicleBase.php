<?php

namespace Vehicles;

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


