<?php
/*
 Condicional IF:
 if (condicion){
 instruciones
 }else{
 otras instrucciones
 }
 //Operadores de comparacion
 == igual 
 ===identico 
 != distinto
 <> diferente
 !== no identico 
 < menor que 
 > mayor que 
 <= menor o igual que 
 >= mayor o igual que 
 //operadores logicos
 && and = Y
 || or = o
 !  not = no 
 and, or 
   
 */
$color = 'verde';
if($color=='rojo'){
    echo 'El color es rojo';
}else{
    echo 'El color no es rojo';
}
echo '</br>';
$year = 2018;
        if ($year  != 2019){
            echo 'Es un año diferente';
        }else{
            echo 'Es un año posterior 2019';
        }
        
        
//Ejemplo 3 
       $nombre='David';
        $edad = 52;
        $ciudad='Madrid';
        $continente='Europa1';
       $mayoria_edad=18;
       if($edad>=$mayoria_edad){
           echo '<h1>'.$nombre.' es mayor de edad'.'</h1>';
           if ($continente=='Europa'){
            echo '<h2> es de '.$ciudad.'</h2>';
           }else{
               echo '<h2>No es europeo </h2>';
           }
       }else{
           echo '<h2>'.$nombre.' no es mayor de edad'.'</h2>';
       }
       
       //ejemplo 4
       echo '<hr>';
       
       $dia=6;
       
       /*if ($dia==1){
           echo '<h1>Es Lunes</h1>';
       }else{
     if ($dia==2){
           echo '<h1>Es Martes</h1>';  
        }else{
            if ($dia==3){
           echo '<h1>Es Miercoles</h1>';  
            }else{
              if ($dia==4){
           echo '<h1>Es Jueves</h1>';    
            
              } else {
                      if ($dia==5){
           echo '<h1>Es Viernes</h1>';    
            
              }else{
                      if ($dia==6){
           echo '<h1>Es Sabado</h1>';    
            
              }else{
                      if ($dia==7){
           echo '<h1>Es Domingo</h1>';    
            
              }
              }
              }
              }
              }
        }
       }*/
       if($dia==1){
           echo '<h1>Es Lunes</h1>';
       }elseif($dia==2){
           echo '<h1>Es Martes</h1>';
       }elseif($dia==3){
           echo '<h1>Es Miercoles</h1>';
       }elseif($dia==4){
           echo '<h1>Es Jueves</h1>';
       }elseif($dia==5){
           echo '<h1>Es Viernes</h1>';
       }elseif($dia==6){
           echo '<h1>Es fin de semana</h1>';
       }
       echo '<hr/>';
       //ejemplo 5
       $edad1=18;
       $edad2=64;
       $edad_oficial=15;
       
       if ($edad_oficial>=$edad1 and $edad_oficial<=$edad2){
           echo 'Esta en edad de trabajar';
       }else{
           echo 'no puede trabajar';
       }
       echo '<br>';
       $pais='Colombia';
          if ($pais=='Mexico'|| $pais=='España'||$pais=='Colombia'){
           echo 'Se habla en español';
       }else{
           echo 'No se habla en español';
       }
       
       //ejemplo 6 switch
       echo '<hr/>';
       $dia=2;
       switch ($dia){
       case 1:
       echo 'Lunes';
       break;
      case 2:
      echo 'Martes';
      break;
      case 3:
      echo 'Miercoles';
      break;
      case 4:
      echo 'Jueves';
      break;
     case 5:
      echo 'Viernes';
      break;
      default :
      echo 'Es fin de semana';
      
       }
        echo '<hr/>';
       //ejemplo 7 GOTO
       goto marca;
       echo '<h3>Instruccion 1</h3>';
       echo '<h3>Instruccion 2</h3>';
       echo '<h3>Instruccion 3</h3>';
       echo '<h3>Instruccion 4</h3>';
       
       marca:
       echo '<h3>Me he saltado 4 echo</h3>';
?>