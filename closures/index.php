<?php

$var2 = 1;

$var = function (){
	echo 'Esto es una funcion anonima';
	echo 'Value: ' . $var2; //Error porque no esta definida dentro del scope local 
};

$var();