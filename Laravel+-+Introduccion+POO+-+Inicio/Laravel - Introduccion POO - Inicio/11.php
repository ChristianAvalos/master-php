<?php


include 'includes/header.php';
//clases abstractas
abstract class Persona{
    public $nombre;
    public $apellido;
    public $email;
    public $telefono;
    
    public function __construct($nombre,$apellido,$email,$telefono)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->telefono = $telefono;
    }
    public function mostrarInformacion(){
        echo "Nombre: ".$this->nombre.' '. $this->apellido .' Email: '.$this->email;
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
     * Get the value of telefono
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set the value of telefono
     */
    public function setTelefono($telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }
}

class Empleado extends Persona {
    public $codigo;
    public $departamento;

    public function __construct($nombre,$apellido,$email,$telefono,$codigo,$departamento)
    {
        parent::__construct($nombre,$apellido,$email,$telefono);
        $this->codigo = $codigo;
        $this->departamento = $departamento;
    }




}

class Proveedor extends Persona{
    public $empresa;

    public function __construct($nombre,$apellido,$email,$telefono,$empresa)
    {
        parent::__construct($nombre,$apellido,$email,$telefono);
        $this->empresa = $empresa;
    }


}

$empleado = new Empleado('Christian','Avalos','c@c.com','12121',01,'Porteria');


$proveedor = new Proveedor('Ricardo','Rodriguez','r@r.com','454445','Dental');

echo "<pre>";
var_dump($empleado);
echo "</pre><br>";

echo "<pre>";
var_dump($proveedor);
echo "</pre><br>";

$empleado->mostrarInformacion();
echo "<br>";
echo $proveedor->mostrarInformacion().' '.$proveedor->empresa;
echo "<br>";

echo $proveedor->getTelefono();

echo "<br>";

echo $empleado->getTelefono();


