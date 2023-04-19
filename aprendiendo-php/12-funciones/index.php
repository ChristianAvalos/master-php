<?php
/*
 Funciones es un conjunto de instrucciones agrupadas bajo un nombre en concreto y que pueden reutilizarce
 *invocando a la funcion
funtion nombreDeMiFuncion(){
 Bloque de instrucciones o de ordenes
 }
 *  */

if (isset($_GET['numero1'])){
    $numero1=$_GET['numero1'];
    sumador($numero1);
}else{
     echo 'ingrese el numero por la  url';
}
function sumador($numero1){
    echo '<h3>Tabla de multiplicar del numero: '.$numero1.'</h3>';
    for ($i=1;$i<=10;$i++){
     $resultado=$numero1*$i;
    ///echo $i.' x '.$numero1.'= '.$resultado.'<br/>';   
    }
    
    //ejemplo 3 
    function calculador($numero1,$numero2){
        $suma=$numero1+$numero2;
        $resta=$numero1-$numero2;
        $multiplicacion=$numero1*$numero2;
        $division=$numero1/$numero2;
        echo 'Suma: '.$suma.'<br/>';
        echo 'Resta: '.$resta.'<br/>';
        echo 'Multiplicacion: '.$multiplicacion.'<br/>';
        echo 'Division: '.$division.'<br/>';
        echo '<hr/>';
    }
    
   /// calculador(10, 30);
   /// calculador(2, 30);
   /// calculador(5, 30);
    
    //ejemplo 4 parametros opcionales
        function calculador2($numero1,$numero2,$negrita = true){
            
            $cadena_texto='';
         if ($negrita==true){
             $cadena_texto.= '<h1>';
         }
        $suma=$numero1+$numero2;
        $resta=$numero1-$numero2;
        $multiplicacion=$numero1*$numero2;
        $division=$numero1/$numero2;
        $cadena_texto.= 'Suma: '.$suma.'<br/>';
        $cadena_texto.= 'Resta: '.$resta.'<br/>';
        $cadena_texto.= 'Multiplicacion: '.$multiplicacion.'<br/>';
        $cadena_texto.= 'Division: '.$division.'<br/>';
        $cadena_texto.= '<hr/>';
         if ($negrita==true){
             $cadena_texto. '</h1>';
         }
         
         return $cadena_texto;
    }
    
    echo calculador2(10, 30,false);
    echo calculador2(2, 30);
    calculador2(5, 30,false);
    //ejemplo 5 funcion con return
    function devuelveNombre($nombre){
        return 'El nombre es: '.$nombre;    
    }
    ///echo   devuelveNombre('Jose');
}

//ejmplo 6 
function getNombre($nombre){
    $texto='El nombre es: '.$nombre.'<br/>';
    return $texto;
}
function getApellidos($apellidos){
    $texto='Los apellidos son: '.$apellidos.'<br/>';
    return $texto;
}
    function devuelveNombre2($nombre,$apellidos){
        $texto= getNombre($nombre). getApellidos($apellidos);
        
        return $texto;    
    }
    echo   devuelveNombre2('Jose','Avalos');





?>

