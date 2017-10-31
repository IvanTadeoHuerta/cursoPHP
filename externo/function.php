<?php
echo '<p>Texto desde function.php</p>';

function suma($a, $b){
	$result = $a + $b ;
	echo '<p>Resultado: '. $result .'</p>';
}