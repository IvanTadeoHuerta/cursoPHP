<?php



$a = 3;
$b = 4;

$result = $a == $b;
var_dump($result);


$a = 3;
$b = 3;

$result = $a === $b;
var_dump($result);

//Nuevo operador en php 7. <=> Sirve para comparar  si dos valores son igual menor o mayor
//retorna 0 si son iguales , 1 primer elemento es mayor y -1 el segundo es mayor
$a = 3;
$b = 3;

$result = $a <=> $b;
var_dump($result);