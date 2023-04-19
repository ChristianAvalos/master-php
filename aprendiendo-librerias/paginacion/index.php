<?php
require_once '../vendor/autoload.php';

//conexion bd 
$conexion = new mysqli("localhost","root","","notas_master");
$conexion->query("SET NAMES 'utf8'");

//consulta a para contar elementos
$consulta = $conexion->query("SELECT * FROM Notas");
$numero_elementos= $consulta->num_rows;
$numero_elementos_pagina=2;

//Hacer paginacion
$pagination = new Zebra_Pagination();

//numero total elementos a paginar
$pagination->records($numero_elementos);

//numero de elementos por pagina
$pagination->records_per_page($numero_elementos_pagina);

$page = $pagination->get_page();


$empieza_aqui=(($page - 1)*$numero_elementos_pagina);
$sql = "SELECT * FROM Notas LIMIT $empieza_aqui,$numero_elementos_pagina";
$notas=$conexion->query($sql);

echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">';
while ($nota = $notas->fetch_object()){
    echo "<h1>{$nota->Titulo}</h1>";
    echo "<h1>{$nota->Descripcion}</h1>";
}

$pagination->render();


?>