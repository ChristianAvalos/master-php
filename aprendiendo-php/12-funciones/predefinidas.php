<?php
//para debuguear
$nombre=1;//'Hola Mundo';
var_dump($nombre);
//variable fecha
echo date('d-m-y').'<br/>';
echo time().'<br/>';
//matematicas
echo 'Raiz cuadrada de 10: '. sqrt(10).'<br/>';
echo 'Numero aleatorio entre 10 y 40: '. rand(10,40).'<br/>';
echo 'El numero pi '. pi().'<br/>';
echo 'Redondeo '. round(7.89926586,2).'<br/>';
//Mas funciones generales
echo gettype($nombre).'<br/>';

if(is_string($nombre)){
    echo 'Esa variable es un string';
} elseif (!is_float($nombre)) {
    echo 'La variable no es un numero';
} 
echo '<br/>';
//comprobar si existe la variable
if(isset($edad)){
    echo 'La variable existe';
}else
{
    echo 'La variable no existe ';
}
echo '<br/>';
//limpiar espacios
$frase='           mi contenido            ';
var_dump(trim($frase));

//eliminar variables /indices
$year=2020;
unset($year);

//comprobar variable vacia
echo '<br/>';
$texto='  ';
if (empty(trim($texto))){
    echo 'La variable esta vacia';
}else{
    echo 'la variable esta con contenido';
}
//Contar caracteres de una cadena
echo '<br/>';
$cadena = '123456';
echo strlen($cadena);
//encontrar caracter
echo '<br/>';
$frase='la vida es bella';
echo strpos($frase, 'i');
//reemplazar contenido de un string 
echo '<br/>';
$frase= str_replace('vida', 'moto', $frase);
echo $frase;
//mayusculas y minusculas
echo '<br/>';
echo strtolower($frase);
echo '<br/>';
echo strtoupper($frase);



?>
