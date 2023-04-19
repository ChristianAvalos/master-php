<?php

use Empleado as GlobalEmpleado;

include 'includes/header.php';

//Metodos estaticos
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

    

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellido
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     */
    public function setApellido($apellido): self
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get the value of departamento
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Set the value of departamento
     */
    public function setDepartamento($departamento): self
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of codigo
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set the value of codigo
     */
    public function setCodigo($codigo): self
    {
        $this->codigo = $codigo;

        return $this;
    }

    public static function obtenerEmpleado(){
        echo 'Desde el metodo estatico';
    }
}
Empleado::obtenerEmpleado();


$em = new Empleado('Juan','Avalos','IT','w@2.com',1);

$juan = new Empleado('Christian','Avalos','vacio','juan@juan.com',10000);

echo "<pre>";
var_dump($juan);
echo "</pre><br>";

echo '</br>';

echo $em->getNombre();

$em->setNombre('Dario');

echo '</br>';

echo $em->getNombre();