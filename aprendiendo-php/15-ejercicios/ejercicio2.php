<?php

/* 
 Escribir un programa con php que añada valores a un array 
 mientras que su longitud sea menor a 120 y luego mostrarlo  por pantalla
 */
$vector=[];
    for($i=0;$i<120;$i++){
          array_push($vector,$i);
          echo $vector[$i].'<br/>';
    }
?>
