<?php
include 'includes/header.php';

//Atributos de una clase
class Empleado { 
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct()
    {
        
    }

    
}

$empleado = new Empleado;

$empleado->nombre = 'Juan';
$empleado->apellido = 'Delatorre';

echo "<pre>";
var_dump($empleado);
echo "</pre>";

$empleado2 = new Empleado;

$empleado2->nombre = 'Dario';
$empleado2->apellido = 'Delatorre';

echo "<pre>";
var_dump($empleado2);
echo "</pre>";