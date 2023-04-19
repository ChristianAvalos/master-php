<?php
/*Variable locales son las que se declaran dentro de una funcion y no pueden ser usadas fuera de la funcion solo estan disponibles
 dentro a no ser que se haga un return 
 Variables globales son las que se declaran fuera de una funcion y estan disponibles dentro y fuera de las funciones
 */
//variable global
$frase='Ni los genios son tan genios ni los mediocres tan mediocres';
echo $frase;
function Holamundo(){
    global  $frase;
    echo '<h1>'.$frase.'</h1>';
    $year = 2019;
    echo $year;
    return $year;
}
echo '<hr/>';
echo holamundo();
//funciones variables 
echo '<hr/>';
function  buenosdias(){
    return 'Hola buenos dias';
}
function  buenastardes(){
    return 'Que tal a ido la comida';
}
function  buenasnoches(){
    return 'Buenas noches';
}
$Horario=$_GET['funcion'];
echo 'Ya es hora '.$Horario();

?>