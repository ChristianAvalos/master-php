<?php
$cantantes=['Jennifer Lopez','Drake','2pac','Alfredo'];
$numeros=[1,2,3,4,5];
//oredenar arrays
sort($cantantes);
var_dump($cantantes);
echo '<br/>';
sort($numeros);
var_dump($numeros);
//añadir cosas a un array
echo '<br/>';
$cantantes[]='natos';
$cantantes[]='natos2';
array_push($cantantes,'W');
//eliminar del array 
array_pop($cantantes);
var_dump($cantantes);
unset($cantantes[2]);
echo '<br/>';
var_dump($cantantes);

//array aleatorios 
echo '<br/>';
$indice= array_rand($cantantes);
echo $cantantes[$indice];

//dar la vuelta a un array 
echo '<br/>';
var_dump(array_reverse($numeros));
//buscar dentro de un array 
echo '<br/>';
$resultado = array_search('Alfredo', $cantantes);
var_dump($resultado);
//contar numero de elementos
echo '<br/>';
echo count($cantantes);
echo '<br/>';
echo sizeof($cantantes);


?>