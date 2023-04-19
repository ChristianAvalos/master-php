<?php

/* 
 Programa que comprube si una variable esta vacia y si esta vacia
 * rellenarla con texto en minusculas y mostrarlos con mayusculas y negritas
 */
$nombre='';
if (empty($nombre)){
    $nombre= 'esto es una mierda';
    echo '<strong>'.strtoupper($nombre).'</strong>';
}else{
    
}

?>