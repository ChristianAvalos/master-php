<?php
/*
 hacer un programa que muestre todos los numeros impares entre dos numero que nos llege por GEt
 */
if (isset($_GET['numero1'])&& isset($_GET['numero2'])){
    $numero1=$_GET['numero1'];
    $numero2=$_GET['numero2'];
    if($numero1<$numero2){
    for($i=$numero1;$i<=$numero2;$i++){
       if ($i%2<>0){
        echo $i.' Es impar<br/>';  
       }else{
           echo $i.' Es par<br/>';  
       }
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