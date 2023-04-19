<?php
include 'includes/header.php';

//Metodos

class Empleado { 
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

    public function nombreEmpleado(){

        echo $this->nombre.' '.$this->apellido;
    }

    public function departamentoEmpleado(){
        return $this->departamento;
    }

    
}

$juan = new Empleado('Christian','Avalos','Telecomunicaciones','juan@juan.com',10000);


$karen = new Empleado('Karen','Perez','Marketing','karen@karen.com',001);


echo "<pre>";
var_dump($juan);
echo "</pre><br>";

echo "<pre>";
var_dump($karen);
echo "</pre><br>";

$departamento = $juan->departamentoEmpleado();

echo $departamento;
echo "<br>";

$departamento = $karen->departamentoEmpleado();

echo $departamento;


