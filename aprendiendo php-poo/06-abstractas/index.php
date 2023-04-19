<?php
abstract class ordenador{
    public $encendido;

    abstract public function encender();

    public function apagar(){
        $this->encendido = false;

    }
}

class PcAsus extends ordenador{
    public $software;

    public function arrancarSoftware(){
        $this->software = true;
    }
    public function encender()
    {
        $this->encendido = true;   
    }
}


$ordenador = new PcAsus();
$ordenador->arrancarSoftware();
$ordenador->apagar();
var_dump($ordenador);