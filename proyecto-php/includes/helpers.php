<?php
function mostrarError($errores,$campo){
    $alerta= '';
    if (isset($errores[$campo]) && !empty($campo)){
        $alerta="<div class='alerta alerta-error'>".$errores[$campo].'</div';
    }
    return $alerta;
}
function borrarErrores(){
    $borrado = false;

    if (isset($_SESSION['errores'])){
    $_SESSION['errores'] = null;
    $borrado=true;
    }

    $borrado = false;
    if (isset($_SESSION['errores_entrada'])){
    $_SESSION['errores_entrada'] = null;
    $borrado=true;
    }

    if (isset($_SESSION['completado'])){
        $_SESSION['completado']=null;
        $borrado=true;
    }
     return $borrado;

    }


function conseguirCategorias($conexion){
    $sql= "SELECT * FROM Categorias ORDER BY idCategorias ASC;";
    $categorias = mysqli_query($conexion,$sql);
    $result= array();
    if($categorias && mysqli_num_rows($categorias)>=1){
        $result= $categorias;
        
    }
return $result;
}

function conseguirCategoria($conexion,$idCategorias){
    $sql= "SELECT * FROM Categorias 
    WHERE idCategorias = $idCategorias";
    $categorias = mysqli_query($conexion,$sql);


    $result= array();

    if($categorias && mysqli_num_rows($categorias)>=1){
        $result= mysqli_fetch_assoc($categorias);
        
    }
return $result;
}

function conseguirEntrada($conexion,$idEntradas){
    $sql= "SELECT e.*,c.nombre as 'Categoria',CONCAT(u.nombre,' ',u.apellidos) as 'usuario'
    FROM Entradas e
    join Categorias c on c.idCategorias = e.categoria_id 
    JOIN  Usuarios u on u.idUsuarios = e.usuario_id 
    WHERE e.idEntradas = $idEntradas";
    $entrada = mysqli_query($conexion,$sql);


    $result= array();

    if($entrada && mysqli_num_rows($entrada)>=1){
        $result= mysqli_fetch_assoc($entrada);
        
    }
return $result;
}

function conseguirEntradas ($conexion,$limit=null,$categoria=null,$busqueda=null){
    $sql = "SELECT  e.*,c.nombre as categoria  FROM Entradas e 
    JOIN Categorias c  on c.idCategorias = e.categoria_id ";
    
    if(!empty($categoria)){
    $sql .= "WHERE idCategorias = $categoria ";
    }

    if(!empty($busqueda)){
        $sql .= "WHERE e.titulo like '%$busqueda%'";
    }

    $sql .= "ORDER BY e.idEntradas DESC ";

    if($limit){
        $sql .= "LIMIT 4 ;";
    }

    $entradas = mysqli_query($conexion,$sql);

    $resultado = array();

    if($entradas && mysqli_num_rows($entradas)>=1){
        $resultado= $entradas;
        
    }
   return $resultado;

}


?>