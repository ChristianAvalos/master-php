<?php
include 'includes/header.php';

class DB{
    public $nombre;
    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public function guardar(){
        echo 'Almacenando '. $this->nombre;
    }
}