<?php
/*
//abrir archivo 
$archivo= fopen('fichero_texto.txt', 'a+');

//leer contenido
while (!feof($archivo)){
$contenido= fgets($archivo);
echo $contenido.'<br/>';
}
 
//escribir en un archivo 
fwrite($archivo, 'Soy un texto metido ');
//cerrar archivo
fclose($archivo);
*/

//copiar fichero 
/*copy('fichero_texto.txt','fichero_copiado.txt') or die('Error al copiar');*/

//renombrar fichero
/*rename('fichero_copiado.txt', 'archivito.txt');*/

//eliminar fichero
/*unlink('archivito.txt') or die('Error al borrar');*/

//comprobar si existe un archivo
if(file_exists('fichero_texto.txt')){
    echo 'El archivo existe';
}else{
    echo 'El archivo no existe';
}

?>
