<?php
/*
 hacer un prorama en php que tenga un array con 8 numeros enteros y que haga lo siguiente 
 1 recorrer y mostrar 
 2 ordenar y mostrar 
 3 mostrar su longitud 
 4 buscar algun elemento  (buscar por el parametro get)
 */
function mostrarnumero($numeros){
    $resultado='';
    foreach ($numeros as $numero){
    $resultado.=$numero.'<br/>';
}
return $resultado;
}
//1
$numeros=[1,2,3,4,5,6,7,8];
echo mostrarnumero($numeros);
//2
sort($numeros);
echo mostrarnumero($numeros);
//3
echo count($numeros).'<br/>';
//4

if (isset($_GET['numero'])){
 $numero=$_GET['numero'];   
 $busqueda=$numero;
$resultado= array_search($busqueda,$numeros);
if (!empty($resultado)){
    echo 'El numero buscado esta en el indice: '.$resultado;
}else{
     echo 'El numero buscado no existe';
}
}else{
    echo 'Ingrese el numero por la url';
}



?>