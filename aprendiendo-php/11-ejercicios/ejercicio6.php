<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Ejercicio 6</title>
    </head>
    <body>
        <form>
             <h1>Ejercicio 6</h1>
            <?php
            echo ' <table border="1"><tr>';
                echo '<tr>';
                 for($i=1;$i<=10;$i++){
                     
                      echo '<th>'.$i.'</th>';                 
                 }
                  echo '</tr>';
                  echo '<tr>';
                  for($i=1;$i<=10;$i++){
                  for($k=1;$k<=10;$k++){
                   
                      echo '<td>'.$i.'*'.$k.'='.$i*$k;
                      
                      }   
                       echo '<tr></tr>';
                  }
                   echo '</tr>';
                  echo '</tr>';
                 echo '</table>';
                 ?>
        </form>
    </body>
</html>
<?php

/*
 * Mostrar una tabla de HTML con las tablas de multiplicar del 1 al 10 
 */
?>