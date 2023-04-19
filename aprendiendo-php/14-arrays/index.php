<?php
/*
 arrays es una coleccion de variables
 para acceder a esos valores podemos usar un indice numerico o alfanumerico
 */
$pelicula='Batman';
$peliculas=array('Batman','Spiderman','El sr de los anillos');
$cantantes=['Jennifer Lopez','Drake','2pac'];
//array asociativo
$personas=array(
                        'nombre'=>'Victor',
                         'apellido' => 'Robles',
                         'web'=>'wwwwmmmwmwmw'
                         );
var_dump($peliculas[1]);
echo ($personas['apellido']);
echo '<br/>';
echo $peliculas[2];
echo '<br/>';
echo $cantantes[0];
echo '<br/>';
//ejemplo 2
echo '<h1>Lista de cantantes</h1>';
echo '<ul>';
for($i=0;$i< count($cantantes);$i++){
    echo '<li>'.$cantantes[$i].'</li>';

}
    echo '</ul>';
    //recorrer con foreach
    echo '<h1>Lista de cantantes</h1>';
    echo '<ul>';
    foreach ($cantantes as $cantante){
        echo '<li>'.$cantante.'</li>';
    }
     echo '</ul>';
     //ejmplo con array multidimensionales
     $contactos=array(
         array(
             'nombre'=>'Jose antonio',
             'email'=>'antonio@ashd,com'
         ),
          array(
             'nombre'=>'Luis',
             'email'=>'luis@.com'
         ),
          array(
             'nombre'=>'Salvador',
             'email'=>'salvador@ashd.com'
         )
     );
     foreach ($contactos as $key => $contacto){
         var_dump($contacto['nombre']);
     }
//     echo $contactos[2]['email'];

?>
