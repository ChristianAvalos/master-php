<?php


trait utilidades{
    public function mostrarNombre(){
        echo "<h1>El nombre es ".$this->nombre."</h1>";
    }
}


class coche{
    public $nombre;
    use utilidades;
}


class Persona{
    public $nombre;
    public $apellido;
    use utilidades;
}

class VideoJuego{
    public $nombre;
    public $anio;
    use utilidades;
}

$coches = new coche();
$coche->nombre="Ferrari Testarosa";

$persona=new Persona();
$persona->nombre="Antonio";;

$videoJuego=new VideoJuego();
$videoJuego->nombre="GTA";

$coche->mostrarNombre();
echo '<br/>';
$persona->mostrarNombre();
echo '<br/>';
$videoJuego->mostrarNombre();



?>