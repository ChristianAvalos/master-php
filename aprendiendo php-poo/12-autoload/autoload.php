<?php

function autocargar_clases($class){
    $class = str_replace('\\', '/', strtolower($class));
    include "clases/".$class.".php";
}


spl_autoload_register('autocargar_clases');



?>