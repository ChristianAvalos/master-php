<?php
/*bucle while
Es una estructura de control que intera o repite la ejecucion de una serie de instrucciones 
muchas veces o tantas veces que fuera necesarios
while (condicion){
 bloque de instrucciones
 }
   */
$numero=0;
  while ($numero<=100){
      echo $numero;
      if ($numero!=100){
          echo ', ';
          
      }
      $numero++;
  }
//ejemplo 
echo '<hr/>';
  if(isset($_GET['numero'])){
      //casteo de datos
      $numero = (int)$_GET['numero'];
       }else{
           $numero=1;
       }
       echo '<h1>Tabla de multiplicar del numero: '.$numero.'</h1>';
       $contador=1;
       while ($contador <=10) {
           echo "$numero x $contador = ".($numero*$contador).'<br/>';
           $contador++;
       }
       /*Do while
       do{
       //Bloque de instrucciones   
       }while ();       
       */
       echo '<hr/>';
       $edad=17;
       $contador=1;
               do{
                   echo 'Tienes acceso al local privado '.$contador.'<br/>';
                   $contador++;
               }while ($edad>=18 && $contador <=10);
       
?>