<?php
/*
Recoger dos numeros para por el metodo GET y 
 * hacer todas las operaciones basicas de una calculadora suma,resta,multiplicacion y division
 */
if (isset($_GET['numero1'])&& isset($_GET['numero2'])){
$numero1 = $_GET ['numero1'];
$numero2 = $_GET ['numero2'];
$suma=$numero1+$numero2;
$resta=$numero1-$numero2;
$multiplicacion=$numero1*$numero2;
$division=$numero1/$numero2;
echo 'La suma es: '.$suma.'<br/>';
echo  'La resta es: '. $resta.'<br/>';
echo  'La multiplicacion es: '.$multiplicacion.'<br/>';
echo  'La division es: '.$division.'<br/>';
}
else{
    echo 'Introduce los valores por la url';
}

?>