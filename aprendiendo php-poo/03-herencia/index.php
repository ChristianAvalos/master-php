<?php
require_once 'clases.php';

$persona = new persona();
//$persona->setNombre('Victor');
var_dump($persona);

$informatico = new informatico();
//$informatico->setAltura(1.90);
//$informatico->sabelenguajes('Htlm,Css,PHP,Python');
var_dump($informatico);

$tecnico = new TecnicoRedes();
var_dump($tecnico);

?>