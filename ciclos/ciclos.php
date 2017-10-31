<?php

for ($i = 0; $i <= 10 ; $i++){
	echo $i. '<br>';
}

echo '<br>';

$i = 0;
while ($i <= 10) {
	echo $i. '<br>';
	$i++;
}

echo '<br>';
$i=0;
do{
	echo $i.'<br>';
	$i++;
}while ($i<=10);

echo '<br>';

$arrayPersonas = [
	0 => 'Ivan',
	1 => 'Tadeo',
	2 => 'Huerta',
	3 => 'Ejemplo'
];

foreach ($arrayPersonas as $persona) {
	 echo 'Nombre de la persona: '.$persona . '<br>';
}

echo '<br>';

foreach ($arrayPersonas as $key => $persona) {
	echo 'Llave: ' . $key . ' Persona: '.$persona . '<br>';
}