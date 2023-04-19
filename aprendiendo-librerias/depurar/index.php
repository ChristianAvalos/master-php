<?php
require_once '../vendor/autoload.php';

$frutas=array('manzanas','sandias','naranjas');

\FB::log($frutas);

$nombres=array('ejecutivo'=>'Antonio','empleado'=>'juan');
\FB::log($nombres);


echo 'Hola mundo '.$nombres['ejecutivo'];
\FB::log('Muestrame esto en consola');


?>