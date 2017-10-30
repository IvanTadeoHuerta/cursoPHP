<?php

$array1 = [
	0 => 'a',
	1 => 'b',
	2 => 'c'
];

$array2 = [
	3 => 'd',
	4 => 'e'
];

//Esto es una operacion de unión y php lo hace basado en lo indices
$result = $array1 + $array2;
var_dump($result);


//+++++++++++++++++++++++++++++++++++++++++++++
echo '<br>';
$array3 = ['a','b','c'];
$array4 = ['a','b','c'];

var_dump($array3 == $array4);
