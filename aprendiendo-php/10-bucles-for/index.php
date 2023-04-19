<?php
/* bucle FOR
for(variable contador,condicion,incrementa){
    //bloque de instrucciones
}*/
$numero=0;
for($i=0;$i<=100;$i++){
    $numero+= $i;
    
}
echo '<h1>El numero es: '.$numero.'</h1>';

//ejmplo tabla de multiplicar
echo '<hr/>';
  if(isset($_GET['numero'])){
      //casteo de datos
      $numero = (int)$_GET['numero'];
       }else{
           $numero=1;
       }
       echo '<h1>Tabla de multiplicar del numero: '.$numero.'</h1>';
      for($contador=1;$contador<=10;$contador++){
           echo "$numero x $contador = ".($numero*$contador).'<br/>';
       }
       
       //uso del break en los bucles
       echo '<hr/>';
  if(isset($_GET['numero'])){
      //casteo de datos
      $numero = (int)$_GET['numero'];
       }else{
           $numero=1;
       }
       echo '<h1>Tabla de multiplicar del numero: '.$numero.'</h1>';
      for($contador=1;$contador<=10;$contador++){
          if ($numero==45){
              echo 'No se puede mostrar estas operaciones';
              break;
          }
           echo "$numero x $contador = ".($numero*$contador).'<br/>';
       }
       
?>