<?php

use Spipu\Html2Pdf\Tag\Html\U;

require_once './database/models/pedido.php';
class pedidoController{
    public function hacer(){
        require_once 'views/pedido/hacer.php';
        
    }

    public function add(){
        if (isset($_SESSION['identity'])){
            $usuario_id=$_SESSION['identity']->id;
            $provincia= isset($_POST['provincia']) ? $_POST['provincia'] : false;
            $localidad= isset($_POST['localidad']) ? $_POST['localidad'] : false;
            $direccion= isset($_POST['direccion']) ? $_POST['direccion'] : false;
            $stats=utils::statsCarrito();
            $coste=$stats['total'];

            if ($provincia & $localidad & $direccion){
            //guardar datos en la bd
            $pedido = new pedido();
            $pedido->setUsuarioId($usuario_id);
            $pedido->setProvincia($provincia);
            $pedido->setLocalidad($localidad);
            $pedido->setDireccion($direccion);
            $pedido->setCoste($coste);

            $save = $pedido->save();
            //guardar linea_pedido
            $save_linea=$pedido->save_linea();

            if ($save && $save_linea){
                $_SESSION['pedido']='complete';
 
            }else{
                $_SESSION['pedido']='failed';

            }

        }else{
            $_SESSION['pedido']='failed';

        }
        header("Location:".base_url.'Pedido/confirmado');

        }else{
            //redirigir al index
            header("Location:".base_url);
        }
    }

    public function confirmado(){
        if (isset($_SESSION['identity'])){
            $identity = $_SESSION['identity'];
            $pedido = new pedido();
            $pedido->setUsuarioId($identity->id);
            $pedido=$pedido->getOneByUser();

            $pedido_productos = new pedido();
            $productos = $pedido_productos->getProductosByPedido($pedido->id);

        }
        

        require_once 'views/pedido/confirmado.php';
    }

    public function mis_pedidos(){
        utils::isIdentity();
        $usuario_id = $_SESSION['identity']->id;
        $pedido = new pedido();
        //sacar los pedidos del usuario
        $pedido->setUsuarioId($usuario_id);
        $pedidos = $pedido->getAllByUser();


        require_once 'views/pedido/mis_pedidos.php';
    }

    public function detalle(){
        utils::isIdentity();
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            //sacar el pedido
            $pedido = new pedido();
            $pedido->setId($id);

            $pedido=$pedido->getOne();

            //sacar los productos
            $pedido_productos = new pedido();
            $productos = $pedido_productos->getProductosByPedido($id);


            require_once 'views/pedido/detalle.php';
        }else{
            header("Location:".base_url.'Pedido/mis_pedidos');
        }        
    }

    public function gestion(){
        utils::isAdmin();
        $gestion = true;

        $pedido = new pedido();
        $pedidos= $pedido->getAll();

        require_once 'views/pedido/mis_pedidos.php';
    }

    public function estado(){
        utils::isAdmin();
        if(isset($_POST['pedido_id']) && isset($_POST['estado'])){
            //recogo los datos del formulario
            $id=$_POST['pedido_id'];
            $estado=$_POST['estado'];

            //update del pedido 
            $pedido = new pedido();
            $pedido->setId($id);
            $pedido->setEstado($estado);
            $pedido->edit();
            header("Location:".base_url.'Pedido/detalle&id='.$id);
        }else{
            header("Location:".base_url);
        }
    }

}

?>