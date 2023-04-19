<?php
require_once '../vendor/autoload.php';

$foto_origginal = 'pez.jpg';

$guardar_en = 'fotomod.jpg';


$thumb = new PHPThumb\GD($foto_origginal);
ob_clean();

//redimencionar imagen
$thumb->resize(250,250);
//recortar imagen
//$thumb->crop(250,250,120,120);
$thumb->cropFromCenter(150,100);

$thumb->show();

$thumb->save($guardar_en);




?>