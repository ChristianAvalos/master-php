<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Validacion de correo</title>
    </head>
    <body>
        <h1>Validar correo</h1>
        <form action="" method="GET" enctype="multipar/form-data">
            <label>Ingresar Correo</label><br/>
            <input type="text" name='email'/>
            <br/>
            <input type="submit" value="Enviar"/>
            <br/>
              </form>
    </body>
</html>

<?php
/*
 Una funcion
 la funcion debe validar un email con filter_var 
 recoger variable por get y validarla 
 mostrar resultado
 */
   function validaremail ($email){
    $status = 'No valido';
    if ( filter_var($email,FILTER_VALIDATE_EMAIL)){
                $status = 'Valido';
    }
    return $status;
}
if(isset($_GET['email'])){
    $email=$_GET['email'];
    echo  validaremail($email);
}


?>
