<?php 
require_once 'autoload.php';
//require_once 'clases/misclases/usuario.php';

/*$usuario = new Usuario();
echo $usuario->nombre;
echo '<br/>';
echo $usuario->email;
echo '<br/>';

$usuario = new Categoria();
echo $usuario->nombre;
echo '<br/>';
echo $usuario->descripcion;
echo '<br/>';

$usuario = new Entrada();
echo $usuario->titulo;
echo '<br/>';
echo $usuario->fecha;*/

//Espacios de nombres y paquetes 
use misclases\Usuario,misclases\Categoria,misclases\Entrada;
use paneladministrador\Usuario as UsuarioAdmin;
class Principal{
    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct()
    {
    $this->usuario = new Usuario();
    $this->categoria=new Categoria();
    $this->categoria=new Entrada();
    }
        /**
     * Get the value of usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set the value of usuario
     */
    public function setUsuario($usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get the value of categoria
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     */
    public function setCategoria($categoria): self
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get the value of entrada
     */
    public function getEntrada()
    {
        return $this->entrada;
    }

    /**
     * Set the value of entrada
     */
    public function setEntrada($entrada): self
    {
        $this->entrada = $entrada;

        return $this;
    }
    function informacion(){
        echo __CLASS__;
    }
    
}
//objeto de otro paquete
$usuario = new UsuarioAdmin();
//var_dump($usuario);
echo '<br/>';
//obejto principal 
$principal = new Principal();
$principal->informacion();
$metodos = get_class_methods($principal);

$busqueda = array_search('setApellidos',$metodos);
var_dump($busqueda);


//comprobar si existe una clase 
$clase = @class_exists('paneladministrador\Usuario');
if ($clase){
    echo "<h1>La clase si existe</h1>";
}else{
    echo '<h1>La clase no existe </h1>';
}


?>