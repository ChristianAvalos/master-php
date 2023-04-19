<?php
class utils{
    public static function deleteSesion($name){
        if (isset($_SESSION[$name])){
        $_SESSION[$name]=null;
        unset($_SESSION[$name]);
        }

        return $name;
        
    }
    public static function isAdmin(){
        if (!isset($_SESSION['admin'])){
            header("Location:".base_url);
        }
        return true;
    }

    public static function isIdentity(){
        if (!isset($_SESSION['identity'])){
            header("Location:".base_url);
        }
        return true;
    }

    public static function showCategorias(){
        require_once './database/models/categoria.php';
        $categoria = new categoria();
        $categorias=$categoria->getAll();
        return $categorias;
    }

    public static function statsCarrito(){
        $stats = array(
            'count' =>0,
            'total' =>0
        );
        if (isset($_SESSION['carrito'])){
            $stats['count'] = count($_SESSION['carrito']);

            foreach($_SESSION['carrito'] as $producto){
                $stats['total'] += $producto['precio']*$producto['unidades'];
            }
        }
        return $stats;
    }

    public static function showStatus($status){
        $value = 'Pendiente';

        if($status == 'confirm'){
            $value = 'Pendiente';
        }elseif($status == 'preparation'){
            $value = 'En preparacion';
        }elseif($status == 'ready'){
            $value = 'Preparado para enviar';
        }elseif($status == 'sender'){
            $value = 'Enviado';
        }
        return $value;
    }

}




?>