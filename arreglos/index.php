<?php

//Php no utiliza arreglos, utiliza mapas ordenados que es una coleccion de llaves y valores
$arrayVar = ['red','blue','black'];
var_dump($arrayVar);

$arr = [
	0 => 'red', 
	1 => 'blue',
	2 => 'black'
];
var_dump($arr);

$colores = [
	'color1' => 'red',
	'color2' => 'blue',
	3 => 'black'
];
var_dump($colores);

//accediendo a un elemento del arreglo
var_dump($colores[3]);

var_dump($colores['color2']);
