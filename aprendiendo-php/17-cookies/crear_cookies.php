<?php
/*
 Las cookies es un fichero que se almacena en el ordenador del usuario que visita
 la web, con el fin de recordar datos o rastrear el comportamiento del mismo en la web
 */

//crear cookies

//setcookie('nombe','valor solo puede ser texto',caducidad,ruta,dominio)

//cookies basica
setcookie('micookies','valor de mi galleta');

//cookies con expiracion
setcookie('unyear','valor de mi cookies de 365 dias',time()+(60*60*24*365));

header('Location:ver_cookies.php');
?>
