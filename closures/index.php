<?php

$var2 = 1;

$var = function () use($var2){
	echo 'Esto es una funcion anonima';
	echo 'Value: ' . $var2; //Error porque no esta definida dentro del scope local 
};

$var();

echo '<br>';

$numeros = [1,2,3,4,5];
$var3 = 3;

$result = array_map(function($n) use($var3){
	return $n * $var3;
}, $numeros);


var_dump($result);
