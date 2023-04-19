        <!-- Conexion, Helpers y Redireccionar -->
        <?php
        require_once 'includes/conexion.php';
        require_once 'includes/helpers.php';
        require_once 'includes/redireccion.php';
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
    
    <!-- Caja Principal -->
    <div id="principal">
        <h1>Editar entradas</h1>
        <p>Edita tu entrada <?=$entrada_actual['titulo']?> </p>
        <br/>
        <form action="guardar-entrada.php?editar=<?=$entrada_actual['idEntradas']?>" method="POST">
            <label for="titulo" >Nombre:</label>
            <input type="text" name="titulo" value="<?=$entrada_actual['titulo']?>"/>
            <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'],'titulo'): ''; ?>

            <label for="descripcion" >Descripcion:</label>
            <textarea name="descripcion"><?=$entrada_actual['descripcion']?></textarea>
            <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'],'descripcion'): ''; ?>


            <label for="categoria" >Categoria:</label>
            <select name="categoria" >
                <?php
                $categorias=conseguirCategorias($db); 
                if(!empty($categorias)):
                while($categoria = mysqli_fetch_assoc($categorias)):
                ?>

                <option value="<?=$categoria['idCategorias']?>"<?=($categoria['idCategorias'] == $entrada_actual['categoria_id'])? 'selected="selected"':''?> 
                >
                    <?=$categoria['nombre']?>
                </option>

                <?php
                endwhile;
                endif; 
                ?>

            </select>
            <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'],'categoria'): ''; ?>

            <input type="submit" value="Guardar"/>

        </form>
        <?php borrarErrores(); ?>
    </div><!-- Fin Principal -->







    <!-- Pie de pagina -->
    <?php
    require_once 'includes/pie.php';
    ?>