<?php
require_once 'includes/conexion.php';
if(isset($_POST['registrar'])){

    

    //Recoger los valores del formulario acttualizacion
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db,$_POST['nombre']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db,$_POST['apellidos']) :false;
    $email= isset($_POST['email']) ? mysqli_real_escape_string($db,trim($_POST['email'])) :false;

    //array de errores
    $errores = array();

    //Validar los datos antes de guardar

    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/",$nombre) ){
        $nombre_validado = true;

    }else{
        $nombre_validado = false;
        $errores['nombre']='El nombre no es valido';
    }

    if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/",$apellidos) ){
        $apellidos_validado = true;

    }else{
        $apellidos_validado = false;
        $errores['apellidos']='Los apellidos no son valido';
    }

    if (!empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)){
        $email_validado = true;

    }else{
        $email_validado = false;
        $errores['email']='El correo no es valido';
    }


    $guardar_usaurio=false;
    if (count($errores)==0){
        
        //comprobar si el email ya existe 
        $sql="SELECT idUsuarios,email FROM Usuarios WHERE email = '$email'";
        $isset_email= mysqli_query($db,$sql);
        $iseet_user = mysqli_fetch_assoc($isset_email);

    if($iseet_user['idUsuarios'] == $usuario['idUsuarios'] || empty($iseet_user)){

        //actualizar el usuario
        $usuario=$_SESSION['usuario'];
        $sql = "UPDATE Usuarios SET nombre='$nombre',apellidos='$apellidos',email='$email'".
        "WHERE idUsuarios = ".$usuario['idUsuarios'];
        $guardar = mysqli_query($db,$sql);
        
         if ($guardar){
            $_SESSION['usuario']['nombre']= $nombre;
            $_SESSION['usuario']['apellidos']= $apellidos;
            $_SESSION['usuario']['email']= $email;

            $_SESSION['completado']= 'Actualizacin exitosa';
            //insertar usuario en la tabla correspondiente
            $guardar_usaurio=True;

        }else{
                $_SESSION['errores']['general']= 'Fallo al actualizar';
        }
    }else{
                $_SESSION['errores']['general']= 'El usuario ya existe';
    }

            }else{
                $_SESSION['errores']= $errores;
                
            }
}
header('Location: mis-datos.php');
?>