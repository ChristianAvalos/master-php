<?php
//Constantes
//Es un contenedor de informacion que no pueden variar 
define('nombre','Christian');
define('web','navegador web');

//variable
$web='navegador web';

echo nombre .' '. web.'</br>';
echo nombre .' '. $web.'</br>';
function holamundo(){
    echo __FUNCTION__.'</br>';
}

//constantes predifinidas
echo PHP_OS.'</br>';
echo PHP_VERSION.'</br>';
echo PHP_EXTENSION_DIR.'</br>';
echo  __LINE__.'</br>';
echo __FILE__.'</br>';
holamundo();

echo PHP_MAJOR_VERSION.'</br>';



?>
