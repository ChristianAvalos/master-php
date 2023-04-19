<?php
require_once 'includes/conexion.php';
session_start();
if(isset($_SESSION['usuario']) && isset($_GET['id'])){
    $entrada_id=$_GET['id'];
    $usuario_id=$_SESSION['usuario']['idUsuarios'];
    $sql="DELETE FROM Entradas WHERE usuario_id= $usuario_id and idEntradas = $entrada_id ";
    mysqli_query($db,$sql);
}
header("Location:index.php");

?>