<?php
//iniciar la session y la conexion a la base de datos
require_once 'includes/conexion.php';


if(isset($_POST)){
    //borrar session antigua
    if(isset($_SESSION['error_login'])){
        unset($_SESSION['error_login']);
    }
    //recoger datos del formulario
    $email=trim($_POST['email']);
    $password=$_POST['password'];

}
//validar las credenciales del usuario
$sql="Select * from Usuarios where email = '$email'";
$login= mysqli_query($db,$sql);

if ($login && mysqli_num_rows($login) == 1){
    $usuario = mysqli_fetch_assoc($login);
//comprobar la contraseña /cifrar nuevamente
    $verify= password_verify($password,$usuario['password']);
    if($verify){
        //utilizar una sesion para guardar los datos del usuario logueado
        $_SESSION['usuario'] = $usuario;

        
    }else{
        //si algo fallo enviar una sesion con el fallo 
        $_SESSION['error_login']='Login Incorrecto!!';
        echo 'Paso';
    }

}else{
    //mensaje de error
    $_SESSION['error_login']='Login Incorrecto!!';
    echo 'Paso';

}
//redirigir al index.php
header('Location:index.php');





?>