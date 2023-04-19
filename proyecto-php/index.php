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
        <h1>Ultimas entradas</h1>
    <?php
        $entradas = conseguirEntradas($db,true);
        if(!empty($entradas)):
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
        endif;
        ?>   

        <div id="ver-todo">
            <a href="entradas.php">Ver todas las entradas</a>
        </div> 
    </div>

        <div class="clearfix"></div>

        <!-- Pie de pagina -->
        <?php
        require_once 'includes/pie.php';
        ?>


    </body>
</html>
<?php



?>
