<?php
    //capturar errores en codigo que posiblemente tengan errores
try{
    if (isset($_GET['id'])){
        echo '<h1>El parametro es:'.$_GET['id'].'</h1>';
    }else{
        throw new Exception('Faltan parametros por la URL ');
    }

    
}
catch(Exception $e)
{
echo 'ah habido un error: '. $e->getMessage();
}



?>