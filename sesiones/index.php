<?php

session_start(); //Permite Inicializar una sesion

$_SESSION['count']=0; //Sub variable superglobales


echo '<p>Session</p>';

/*
 * Las sesiones son unicas por cliente  
 * Cuando cerramos el navegador la sesion se perderá
 *
 */

