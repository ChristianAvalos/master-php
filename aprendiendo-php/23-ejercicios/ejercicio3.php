  <?php

/*
 * crear una calculadora con una interfaz de usuario(formulario) con 4 botones,con dos inputs 
 1 para sumar,restar,dividir,multiplicar
 */
 ?>
<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Calculadora</title>
    </head>
    <body>
        <h1>Calculadora</h1>
        <form action="" method="POST" enctype="multipar/form-data">
            <label>Ingresar los numeros</label><br/>
            <p>
                <input type="number" name='numero1' required="required" pattern="[0-9]+" />
                <input type="number" name='numero2' required="required" pattern="[0-9]+"/>
                = 
                <?php
                if(isset($_POST['numero1'])&& isset($_POST['numero2'])){
                     $num1=$_POST['numero1'];
                    $num2=$_POST['numero2'];
                    
                 $resultado = null;
                 function calcular($num1,$num2){
                   if (isset($_POST['sumar'])){
                       $resultado=$num1 + $num2;
                   }elseif(isset($_POST['restar'])){
                       $resultado=$num1 - $num2;
                   }elseif(isset($_POST['dividir'])){
                       $resultado=$num1 / $num2;
                   }elseif(isset($_POST['multiplicar'])){
                       $resultado=$num1 * $num2;
                   }
                    
                     return $resultado;
                 }
                 echo calcular($num1, $num2);
                }
                ?>
            </p>
            <input type="submit" value="Sumar" name='sumar'/>
            <input type="submit" value="Restar" name="restar"/>
            <input type="submit" value="Dividir" name="dividir"/>
            <input type="submit" value="Multiplicar" name="multiplicar"/>
              </form>
    </body>
</html>
