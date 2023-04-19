<?php
if(isset($_POST)){
    //conexion a la base de datos
    require_once 'includes/conexion.php';

    $titulo= isset($_POST['titulo']) ? mysqli_real_escape_string($db,$_POST['titulo']):false;
    $descripcion= isset($_POST['descripcion']) ? mysqli_real_escape_string($db,$_POST['descripcion']):false;
    $categoria=isset($_POST['categoria']) ? (int)$_POST['categoria']:false;
    $usuario =$_SESSION['usuario']['idUsuarios'];
    //array de errores
    $errores = array();

       //Validar los datos antes de guardar
        if (empty($titulo)){
            $errores['titulo'] = 'El titulo no es valido';

        }
    if (empty($descripcion)){
        $errores['descripcion'] = 'La descripcion no es valido';

    }
    if (empty($categoria) && !is_numeric($categoria)){
        $errores['categoria'] = 'La categoria no es valida';

    }
    if (count($errores)==0){
        if (isset($_GET['editar'])){
            $entrada_id=$_GET['editar'];
            $sql="UPDATE Entradas SET titulo = '$titulo',descripcion='$descripcion',categoria_id=$categoria
                    where idEntradas='$entrada_id' and usuario_id='$usuario'";
        }else{
            $sql = "INSERT INTO Entradas VALUES(NULL,$usuario,$categoria,'$titulo','$descripcion',curdate())";
        }

    $guardar = mysqli_query($db,$sql);

    header('Location: index.php');

    }else{
        $_SESSION['errores_entrada']=$errores;
        if(isset($_GET['editar'])){
            header("Location: editar-entrada.php?id=".$_GET['editar']);
        }else{
            header('Location: crear-entradas.php');
        }
       
    }
    
}
?> 