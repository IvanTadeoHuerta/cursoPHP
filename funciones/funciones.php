<?php

/*function hello($name){
	echo 'Hello '. $name;
	echo '<br>';
}

hello('Juan');
hello('Alejo');*/

$x = 100; // $x existe en el scope global pero no dentro de la funciones

function sum($a , $b){
	$x = $a + $b;
	return $x;  // retorna la suma y no el 100 porque esta en un scope diferente
}

$c = sum(1, 2);
var_dump($c);

var_dump($x);