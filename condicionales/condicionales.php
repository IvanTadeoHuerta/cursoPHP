<?php

$color = 'green2';

if($color == 'black'){
	echo 'Color es Black';
}else if($color == 'green') {
	echo 'El color no es verde';
}else{
	echo 'color desconocido en if';
}

echo '<br>';

switch ($color) {
	case 'green':
		echo 'es verde switch';
		break;
	case 'black':
		echo 'es negro switch';
		break;
	default:
		echo 'Color desconocido en swith';
		break;
}