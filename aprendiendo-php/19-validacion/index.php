<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Validacion de fomrularios</title>
    </head>
    <body>
        <h1>Validar fomrularios en PHP</h1>
        <?php
        if(isset($_GET['error'])){
            $error = $_GET['error'];
            if ($error == 'Faltan_datos'){
                echo '<strong style="color:red">Introduce todos los datos en todos los campos del formulario</strong>';
            }
            if ($error == 'nombre'){
                echo '<strong style="color:red">El nombre no es correcto</strong>';
            }
            if ($error == 'apellido'){
                echo '<strong style="color:red">El apellido no es correcto</strong>';
            }
            if ($error == 'edad'){
                echo '<strong style="color:red">La edad no es correcta</strong>';
            }
            if ($error == 'email'){
                echo '<strong style="color:red">El  correo no es correcto</strong>';
            }
            if ($error == 'pass'){
                echo '<strong style="color:red">La contraseña no puede ser menor que 5 </strong>';
            }
        }
        
        ?>
        <form method="POST" action="procesar_formularios.php">
            <label for="nombre">Nombre </label><br/>
            <input type="text" name="nombre" required="required" pattern="[a-zA-Z]+" ><br/>
            
           <label for="apellido">Apellido</label><br/>
            <input type="text" name="apellido" required="required" pattern="[a-zA-Z]+"  ><br/>
            
            <label for="edad">Edad</label><br/>
            <input type="number" name="edad" required="required" pattern="[0-9]+"  ><br/>
            
            <label for="email">Correo</label><br/>
            <input type="text" name="email" ><br/>
            
             <label for="pass">Contraseña</label><br/>
             <input type="password" name="pass"  required="required" minlength="5"><br/>
             
            <input type="submit" value="enviar"><br/>
        </form>
    </body>
</html>