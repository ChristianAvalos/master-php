<?php
class coche{
    //atributos o propiedades 
    //Public se puede acceder de cualquier lugar, dentro de la clase actual o de la clase que hereden
    // o fuera de la clase 

    public $color ;

    //Protected Podemos acceder desde la clase que los define y desde clases que heredan

    protected $marca ;
    
    //Private unicamente se puede acceder desde esta classe
    private $modelo ;


    public $velocida;
    public $caballaje;
    public $plazas;

    public function __construct($color,$marca,$modelo,$velocidad,$caballaje,$plazas){
        $this->color=$color;
        $this->marca=$marca;
        $this->modelo=$modelo;
        $this->velocidad=$velocidad;
        $this->caballaje=$caballaje;
        $this->plazas=$plazas;

    }

    //metodos, son acciones que hacel el objeto (antes eran funciones)
    public function getcolor(){
        //busca en esta clase la propiedad "x" 
        return $this->color;

    }

    public function setColor($color){
            $this->color =$color;
    }

    public function acelerar(){
        $this->velocidad++;
    }
    public function frenar(){
        $this->velocidad--;
    }

    public function getVelocidad(){
        return $this->velocidad;
    }

    public function setMarca($marca){
        $this->marca = $marca;

    }

    public function mostrarInformacion(coche $miObjeto){
        if (is_object($miObjeto)){
        $informacion="<h1>Informacion del coche</h1>";

        $informacion.="Color: ".$miObjeto->color."<br/>";
        $informacion.="Modelo: ".$miObjeto->modelo."<br/>";
        $informacion.="Velocidad: ".$miObjeto->velocidad."<br/>";

        
        }else{
            $informacion="Tus datos no son un objeto ".$miObjeto;

        }
        return $informacion;
    }


}// fin definicion de la clase


?>