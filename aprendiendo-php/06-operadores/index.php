<?php

//operadores aritmeticos
$numero1=65;
$numero2=33;

echo '<h1>Suma: '.($numero1+$numero2).'</h2>'.'</br>';
echo '<h1>Resta: '.($numero1-$numero2).'</h2>'.'</br>';
echo '<h1>Multiplicacion: '.($numero1* $numero2).'</h2>'.'</br>';
echo '<h1>Division: '.($numero1/$numero2).'</h2>'.'</br>';
echo '<h1>Resto: '.($numero1%$numero2).'</h2>'.'</br>';


//Operadores incremento y decremento

$year = 2019;
echo '<h1>'.$year.'</h1>';
$year++;
echo '<h1>'.$year.'</h1>';
$year--;
echo '<h1>'.$year.'</h1>';
++$year;
echo '<h1>'.$year.'</h1>';
$year=$year+1;
echo '<h1>'.$year.'</h1>';

//operadores de asignacion 
$edad=55;

echo $edad.'</br>';
echo ($edad+=5).'</br>';
echo ($edad-=5).'</br>';

?>
