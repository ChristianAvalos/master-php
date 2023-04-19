<?php

/*
 Para mostrar el valor de las cookies tengi que usar $_cookie,una variable superglobal,
 es un array asociativo.
 */
if (isset($_COOKIE['micookies']))   {
    echo '<h1>'.$_COOKIE['micookies'].'</h1>';
}else{
    echo 'No existe la cookie';
}
if (isset($_COOKIE['unyear']))   {
    echo '<h1>'.$_COOKIE['unyear'].'</h1>';
}else{
    echo 'No existe la cookie';
}
?>
<a href="crear_cookies.php">Crear mis galletas</a>
<a href="borrar_cookies.php">Borrar cookies</a>
