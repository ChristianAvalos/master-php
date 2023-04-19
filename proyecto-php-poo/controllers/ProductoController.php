<?php 
require_once './database/models/producto.php';
class productoController{
    public function index(){
        $producto = new producto();
        $productos= $producto->getRandom(6);

        //renderizar vista 
        require_once 'views/producto/destacados.php';
        
    }
    public function ver(){
        //utils::isAdmin(); solo para ver los admnistradores
        if(isset($_GET['id'])){
            $id=$_GET['id'];

            $producto = new producto();
            $producto->setId($id);

            $product=$producto->getOne();
        }
        require_once 'views/producto/ver.php';
    }
    public function gestion(){
        utils::isAdmin();
        $producto = new producto;
        $productos= $producto->getAll();
        require_once 'views/producto/gestion.php';

    }

    public function crear(){
        utils::isAdmin();
        require_once 'views/producto/crear.php';
    }

    public function save(){
        utils::isAdmin();
        if (isset($_POST)){
            $nombre=isset($_POST['nombre'])?$_POST['nombre']:false;
            $descripcion=isset($_POST['descripcion'])?$_POST['descripcion']:false;
            $precio=isset($_POST['precio'])?$_POST['precio']:false;
            $categoria=isset($_POST['categoria'])?$_POST['categoria']:false;
            $stock=isset($_POST['stock'])?$_POST['stock']:false;
            
            if ($nombre && $descripcion && $precio && $stock && $categoria){
                $producto = new producto();
                $producto->setNombre($nombre);
                $producto->setDescripcion($descripcion);
                $producto->setPrecio($precio);
                $producto->setStock($stock);
                $producto->setCategoriaId($categoria);

                //guardar la imagen 
            if(isset($_FILES['imagen'])){
                $file=$_FILES['imagen'];
                $filename=$file['name'];
                $mimetype=$file['type'];

                if($mimetype=="image/jpg" || $mimetype=="image/jpeg" || $mimetype=="image/png" || $mimetype=="image/gif"){

                    if(!is_dir('uploads/images')){
                        mkdir('uploads/images',0777,true);
                    }
                    move_uploaded_file($file['tmp_name'],'uploads/images/'.$filename);
                    $producto->setImagen($filename);
                }
            }
                if (isset($_GET['id'])){
                    $id=$_GET['id'];
                    $producto->setId($id);
                    $save= $producto->edit();

                }else{
                    $save= $producto->save();
                }
                
                
                if($save){
                    $_SESSION['producto']='complete';


                }else{
                    $_SESSION['producto']='fallo';

                }

            }else{
                $_SESSION['producto']='fallo';
            }
            header("Location:".base_url.'Producto/gestion');
        }
    }

    public function editar(){
        utils::isAdmin();
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            $editar=true;

            $producto = new producto();
            $producto->setId($id);

            $pro=$producto->getOne();

            require_once 'views/producto/crear.php';

        }else{
            header("Location:".base_url.'Producto/gestion');
        }
    }

    public function eliminar(){
        utils::isAdmin();
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            $producto = new producto();
            $producto->setId($id);
            $delete=$producto->delete();

            if ($delete){
                $_SESSION['delete']='complete';

            }else{
                $_SESSION['delete']='fallo';
            }
        }else{
            $_SESSION['delete']='fallo';
        }
        header("Location:".base_url.'Producto/gestion');
        
    }

}


?>