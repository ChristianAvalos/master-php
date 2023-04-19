<?php 
require_once 'configuracion.php';

configuracion::setColor("Blue");

configuracion::setEntorno('localhost');

configuracion::setNewletter(true);

echo configuracion::$color.'<br/>';
echo configuracion::$entorno.'<br/>';
echo configuracion::$newletter.'<br/>';

?>