<?php

$a = 1;
$b  = 2;
$c = $a * $b;

var_dump($c);

//Ejemplo de cast

$a1 = 10;
$b1  = 3;
$c1 = (int)($a1 / $b1);
var_dump($c1);

//modulo

$a2 = 10;
$b2  = 3;
$c2 = $a2%$b2;
var_dump($c2);
