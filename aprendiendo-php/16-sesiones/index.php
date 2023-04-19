<?php
/*
 *una sesion lo que hace es almacenar y persistir datos del usuario mientras navega em un
 *  sitio hasta que cierra la sesion o el navegador 
 */
//Iniciar la sesion
session_start();
//varibale local
$variable_normal='soy una cadena de texto';

//variable de session
$_SESSION['variable persistente']='Hola soy una session activa';

echo $variable_normal.'<br/>';
echo $_SESSION['variable persistente'].'<br/>';
?>
