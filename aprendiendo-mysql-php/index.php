<?php
// conectar a la base de datos mysql desde php

$conexion = mysqli_connect('localhost', 'root', '', 'phpmysql');

//comprobar si la conexion es correcta
if (mysqli_connect_errno()){
    echo 'La conexion a la base de datos a fallado';
}else{
    echo 'Conexion correcta';
}

//consulta para configurar la codificacion de caracteres

mysqli_query($conexion, 'SET NAMES UTF8');

//consulta Select desde php 

$query = mysqli_query($conexion, 'Select * From Notas');
//$notas= mysqli_fetch_assoc($query);
echo '<br/>';
while ($nota = mysqli_fetch_assoc($query)){
    //var_dump($nota);
    echo  '<h2>'.$nota['Titulo'].'</h2>'.'<br/>';
    echo  $nota['Descripcion'].'<br/>';
}

//insertar desde php  a mysql
$sql= "INSERT INTO Notas values(null, 'Nota desde PHP','Esto es una nota desde PHP', 'gren' )";
$insert = mysqli_query($conexion, $sql);
if($insert){
    echo 'Datos insertados correctamente';
    
}else{
    echo 'Error: '. mysqli_error($conexion);
}


?>