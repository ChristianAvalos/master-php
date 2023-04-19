<?php
//programacaion orientada a objetos

//definir una clase(molde para crear mas objetos de tipo coche con caracteristicas parecidas)
class coche{
    //atributos o propiedades 
    public $color = "Rojo";
    public $marca = "Ferrari";
    public $modelo = "Aventador";
    public $velocidad = 300;
    public $caballaje = 500;
    public $plazas = 2;

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

}// fin definicion de la clase

//crear un objeto o instanciar la clase 
$coche = new coche();

//usar los metodos 
echo $coche->getVelocidad();

$coche->setColor("Amarillo");

echo $coche->getcolor();

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();

$coche->frenar();

echo $coche->getVelocidad();






?>