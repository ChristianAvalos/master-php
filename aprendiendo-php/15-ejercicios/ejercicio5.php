<?php

/* 
 crear un array con el contenido de la siguiente tabla
 Accion           Aventura           Deportes
 GTA               Asssasins             Fifa 19 
 COD              Crash                    Pes 19 
 PUGB           Prince of percia  Moto GP 19
 * cada fila debe ir en un fichero separado
 */
$tabla=array(
    'Accion'=>array('GTA','COD','PUB'),
    'Aventura'=>array('Assasins','Crash','Prince of persia'),
    'Deportes'=>array('Fifa 19 ','Pes 19','Moto GP 19')
);
$categorias= array_keys($tabla);
?>
<table border="1">
 <?php require_once  'includes/cabeceras.php';?>
 <?php require_once  'includes/primera.php';?>
 <?php require_once  'includes/segunda.php';?>
<?php require_once  'includes/tercera.php';?>


</table>