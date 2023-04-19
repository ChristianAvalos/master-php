<?php
/*
tipos de datos:
Entero (int/integer)=99
coma flotante/decimales = 1,55
cadenas de caracteres / string = 'Hola esto es un string'
Booleano (bool)=True False
null
array (coleccion de datos)
objetos
*/

$numero_numero=100;
echo gettype($numero_numero).'</br>';
$dcimal=1.25;
echo gettype($dcimal).'</br>';
$texto='Soy un texto '."\t". $numero_numero;
echo $texto.'</br>';
echo gettype($texto).'</br>';
$verdadero=false;
echo gettype($verdadero).'</br>';
echo $verdadero.'</br>';
$nula=null;
echo gettype($nula).'</br>';

//Debugear
$mi_nombre []= 'Christian Avalos';
$mi_nombre []= 'Christian Avalos';
var_dump($mi_nombre);


?>