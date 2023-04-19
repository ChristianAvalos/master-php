<?php
require_once 'coche.php';

$coche = new coche('Azul','Toyota','Auris',180,100,4);

$coche2 = new coche('Rojo','Ferrari','Evantura',300,100,4);

$coche->color="Rosa";
$coche->setMarca("Changan");

echo $coche->mostrarInformacion($coche);


/*var_dump($coche);

var_dump($coche2);*/


?>