        <!-- Conexion y Helpers -->
        <?php
        require_once 'includes/conexion.php';
        require_once 'includes/helpers.php';
        ?>


<?php
    $entrada_actual= conseguirEntrada($db,$_GET['id']);
    if(!isset($entrada_actual['idEntradas'])){
        header("Location:index.php");
    }
?>
        
        <!-- Cabecera -->
        <?php
        require_once 'includes/cabecera.php';
        ?>
        <!-- Barra lateral -->
        <?php
            require_once 'includes/lateral.php';
        ?>

    <!-- Caja principal -->
    <div id="principal">

        <h1><?=$entrada_actual['titulo']?></h1>

        <a href="categoria.php?id=<?=$entrada_actual['categoria_id']?>"> 
            <h2><?=$entrada_actual['Categoria']?></h2>
        </a>
        <h4><?=$entrada_actual['fecha']?> |<?=$entrada_actual['usuario']?></h4>
        <p>
            <?=$entrada_actual['descripcion']?>
        </p>

        <?php
            if(isset($_SESSION['usuario']) && $_SESSION['usuario']['idUsuarios'] == $entrada_actual['usuario_id']):
        ?>
        <br/>
        <a href="editar-entrada.php?id=<?=$entrada_actual['idEntradas']?>" class="boton boton-naranja" >Editar entradas</a>
        <a href="borrar-entrada.php?id=<?=$entrada_actual['idEntradas']?>" class="boton" >Eliminar entrada</a>
        <?php endif?>

    </div><!-- Fin div principal -->

        <!-- Pie de pagina -->
        <?php
        require_once 'includes/pie.php';
        ?>


    </body>
</html>
<?php



?>
