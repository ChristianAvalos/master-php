<?php
include 'includes/header.php';

//Tipado
class Empleado { 
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct(string $nombre,$apellido,$departamento,$email,$codigo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;


    }

    
}

$juan = new Empleado('Christian','Avalos','vacio','juan@juan.com',10000);
$karen = new Empleado('Karen','Perez','Marketing','karen@karen.com',001);


echo "<pre>";
var_dump($juan);
echo "</pre><br>";

echo "<pre>";
var_dump($karen);
echo "</pre><br>";