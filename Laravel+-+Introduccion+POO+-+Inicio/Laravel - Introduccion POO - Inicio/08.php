<?php
include 'includes/header.php';

//Modificadores de accesos
class Empleado { 
    //public te permite acceder desde una isntancia o una clase
    //protected solo te permite desde la clase
    //private solo esta permitido desde una sola clase

    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct($nombre,$apellido,$departamento,$email,$codigo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;


    }

    
}

$juan = new Empleado('Christian','Avalos','vacio','juan@juan.com',10000);

echo "<pre>";
var_dump($juan);
echo "</pre><br>";

