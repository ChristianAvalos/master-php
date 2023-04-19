<?php
//crear carpeta
if(!is_dir('mi_carpeta')){
mkdir('mi_carpeta',0777) or die('No se puede crear la carpeta');
 //para linux se debe de dar permisos a las carpetas al crear desde php
chmod('mi_carpeta',0777);
echo 'Carpeta creada <br/>';
}else{
    echo 'Ya existe la carpeta <br/>';
}
//eliminar carpeta 
/*if (is_dir('mi_carpeta')){
    rmdir('mi_carpeta');
    echo 'Carpeta eliminada satisfatoriamente <br/>';
}else{
    echo 'La carpeta no existe <br/>';
}*/

//listar contenidos dentro de una carpeta 
if ($gestor= opendir('./mi_carpeta')){
    while (false !== ($archivo = readdir($gestor))){
        if ($archivo != '.' && $archivo !='..'){
            echo $archivo.'<br/>';
        }
    }
}

?>
