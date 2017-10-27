<?php

$intVar = 5;

//las comillas simples se mostraran tal cual en el lado del cliente
$stringVar = 'Teto de ejemplo Ciao! $intVar';
echo $stringVar;

//las comillas dobles php trata de evaluar la cadena 

$stringVar2 = "Teto de ejemplo Ciao! $intVar";
echo $stringVar2;
