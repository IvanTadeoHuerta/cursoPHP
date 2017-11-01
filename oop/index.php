<?php

class Car
{
	public $owner;

	public function move(){
		echo 'moving <br>';
	}

}

echo 'Class Car <br>';

$car = new Car();

$car->move();


