<?php
/*
 hacer un programa que muestre todos los numeros entre dos numero que nos llege por GEt
 */
if (isset($_GET['numero1'])&& isset($_GET['numero2'])){
    $numero1=$_GET['numero1'];
    $numero2=$_GET['numero2'];
    if($numero1<$numero2){
    for($i=$numero1;$i<=$numero2;$i++){
        echo $i.'<br/>';  
    }    
    }else
    {
        echo 'El numero 1 es mayor   al numero 2';
    }
}else
{
    echo 'Ingresa los valor por la url';
}
?>
