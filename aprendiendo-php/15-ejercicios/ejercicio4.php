<?php

/* 
Crear un sript php que tenga 4 variables 1 del tipo array ,otra int,otra boolean
 * que imprima segun el tipo de variable que sea
 */
$vector=array();
$nombre='Jose';
$check=false;

if(is_string($nombre)){
    echo 'la variable es un string';
}
if(is_array($vector)){
    echo 'la variable es un array';
}
if(is_bool($check)){
    echo 'la variable es un booleano';
}    

?>
