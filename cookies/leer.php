<?php
/* setcookie recibe 3 parametros:
   1.- Nombre de la cookie
   2.- Cadena
   3.- Tiempo de vida en segundos */


setcookie('count','1', time() +  60);

echo '<p>Estamos trabajando con cookies</p>';
