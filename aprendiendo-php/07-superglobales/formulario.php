<<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Formulario en PHP</title>
    </head>
    <body>
        <h1>Formulario en PHP</h1>
        <form method="POST" action="recibir.php">
            <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre"/>
            </p>
            <p>
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido"/>
            </p>
            
            <input type="submit" value="enviar datos"/>
        </form>
    </body>
<?php
?>
