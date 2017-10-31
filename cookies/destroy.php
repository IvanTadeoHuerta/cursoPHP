<?php

//time()-1 establece un tiempo de vigencia en el pasado  y hará que la cookie sea invalida
setcookie('count',null,time()-1);

echo 'Eliminar cookie';