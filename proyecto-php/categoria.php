        <!-- Conexion y Helpers -->
        <?php
        require_once 'includes/conexion.php';
        require_once 'includes/helpers.php';
        ?>


<?php
    $categoria_actual= conseguirCategoria($db,$_GET['id']);
    if(!isset($categoria_actual['idCategorias'])){
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

        <h1>Entradas de <?=$categoria_actual['nombre']?></h1>

        
        <?php
        $entradas = conseguirEntradas($db,null,$_GET['id']);
        if(!empty($entradas) && mysqli_num_rows($entradas) >= 1):
            while($entrada = mysqli_fetch_assoc($entradas)):
                
        ?>
    <article class="entrada">  
        <a href="entrada.php?id=<?=$entrada['idEntradas']?>">
                <h2><?=$entrada['titulo']?></h2>
                <span class="fecha"><?=$entrada['categoria'].'|'.$entrada['fecha']?></span>
                <p>
                <?=substr($entrada['descripcion'],0,250).'...'?> 
                </p>
            </a>
    </article>
        <?php     
            endwhile;
        else:
        ?>   
        <div class="alerta-error">No hay entradas en esta categoria</div>
        <?php endif ?>

        <div class="clearfix"></div>

        <!-- Pie de pagina -->
        <?php
        require_once 'includes/pie.php';
        ?>


    </body>
</html>
<?php



?>
