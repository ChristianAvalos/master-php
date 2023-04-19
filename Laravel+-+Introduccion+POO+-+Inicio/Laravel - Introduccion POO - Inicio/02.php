<?php

use Empleado as GlobalEmpleado;

include 'includes/header.php';

//Instanciar una clase
class Empleado { 
    public function __construct()
    {
        
    }
}

$empleado = new Empleado;
$empleado2 = new Empleado;
$empleado3 = new Empleado;

echo "<pre>";
var_dump($empleado);
echo "</pre>";

echo "<pre>";
var_dump($empleado2);
echo "</pre>";

echo "<pre>";
var_dump($empleado3);
echo "</pre>";
