<?php 
require_once './database/models/categoria.php';
require_once './database/models/producto.php';
class categoriaController{
    public function index(){
        utils::isAdmin();
        $categoria = new categoria();
        $categorias=$categoria->getAll();

        require_once 'views/categoria/index.php';
        
    }
    public function crear(){
        utils::isAdmin();
        require_once 'views/categoria/crear.php';
    }

    public function ver(){
        if(isset($_GET['id'])){
            $id=$_GET['id'];

            //conseguir categorias
            $categoria = new categoria();
            $categoria->setId($id);
            $categoria = $categoria->getOne();

            //conseguir productos
            $producto = new producto();
            $producto->setCategoriaId($id);
            $productos=$producto->getAllCategory();
            
        }
        require_once 'views/categoria/ver.php';

    }

    public function save(){
        utils::isAdmin();
        if(isset($_POST) && isset($_POST['nombre'])) {
        //guardar la categoria en bd 
        $categoria = new Categoria();
        $categoria->setNombre($_POST['nombre']);
        $save=$categoria->save();
        if ($save){
            $_SESSION['categoria']="Completado";
        }else{
            
            $_SESSION['categoria']="Fallo";
            
        }
        }
        header("Location:".base_url."Categoria/index");

    }
}


?>