<?php
include 'includes/header.php';

//Constructores property promotion 
class Empleado { 

    public function __construct(
        public $nombre,
        public $apellido,
        public $departamento,
        public $email,
        public $codigo
    )
    {


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