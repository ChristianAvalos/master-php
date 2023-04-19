<?php
//Herencia: la posibilidad de compratir atributos y metodos entre clases

class persona
{
    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;
    
    

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
     * Get the value of apellidos
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set the value of apellidos
     */
    public function setApellidos($apellidos): self
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get the value of altura
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     */
    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }

    /**
     * Get the value of edad
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set the value of edad
     */
    public function setEdad($edad): self
    {
        $this->edad = $edad;

        return $this;
    }

    public function hablar(){
        return "Estoy hablando";
    }
    public function caminar(){
        return "Estoy caminando";
    }



}

class informatico extends persona{
    public $lenguaje;
    public $experienciaProgramador;

    public function __construct()
    {
        $this->lenguaje = 'Html,Css,PHP';
        $this->experienciaProgramador=10;

    }

    public function sabelenguajes($lenguajes){
        $this->lenguaje = $lenguajes;
        return $this->lenguaje;
    }

    public function progrmar(){
        return "Soy programador ";
    }

    public function repararOrdenador(){
        return "Reparo ordenadores ";
    }

    public function hacerOfimatica(){
        return "Estoy escriniendo en word";
    }


}
class TecnicoRedes extends informatico{
    public $auditarRedes;
    public $experienciaRedes;
    public function __construct()
    {
        parent::__construct();
        $this->auditarRedes="Experto";
        $this->experienciaRedes=5;

    }

    public function auditoria(){
        return "Estoy auditando";
    }
}