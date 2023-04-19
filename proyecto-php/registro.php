<?php
require_once 'includes/conexion.php';
if(isset($_POST['registrar'])){
    
        if(!$_SESSION){
            session_start();
        }
    

    //Recoger los valores del formulario
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db,$_POST['nombre']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db,$_POST['apellidos']) :false;
    $email= isset($_POST['email']) ? mysqli_real_escape_string($db,trim($_POST['email'])) :false;
    $password= isset($_POST['password']) ? mysqli_real_escape_string($db,$_POST['password']) :false;

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

    if (!empty($password)){
        $password_validado = true;

    }else{
        $password_validado = false;
        $errores['password']='La contraseña esta vacia';
    }

    $guardar_usaurio=false;
    if (count($errores)==0){

        //cifrar la contraseña
        $password_segura = password_hash($password,PASSWORD_BCRYPT,['cost'=>4]);
        $sql = "Insert into Usuarios values(null,'$nombre','$apellido','$email','$password_segura',curdate())";
        $guardar = mysqli_query($db,$sql);
        

        if ($guardar){
            $_SESSION['completado']= 'El registro se ha completado con exito';

        }else{
            $_SESSION['errores']['general']= 'Falla al guardar el usuario';
        }

        //insertar usuario en la tabla correspondiente
        $guardar_usaurio=True;


    }else{
        $_SESSION['errores']= $errores;
        
    }
}
header('Location: index.php');
?>