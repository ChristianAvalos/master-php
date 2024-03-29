    <!-- Redireccionar -->
    <?php require_once 'includes/redireccion.php';?>
   <!-- Incluir Cabecera -->
    <?php require_once 'includes/cabecera.php';?>
    <!-- Incluir Barra lateral -->
    <?php require_once 'includes/lateral.php';?>
    
    <!-- Caja Principal -->
    <div id="principal">
        <h1>Crear entradas</h1>
        <p>Añade nuevas entradas al bloc para que los usuarios puedan leerlas y disfrutar de nuestro contenido </p>
        <br/>
        <form action="guardar-entrada.php" method="POST">
            <label for="titulo" >Nombre:</label>
            <input type="text" name="titulo"/>
            <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'],'titulo'): ''; ?>

            <label for="descripcion" >Descripcion:</label>
            <textarea name="descripcion"></textarea>
            <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'],'descripcion'): ''; ?>


            <label for="categoria" >Categoria:</label>
            <select name="categoria">
                <?php
                $categorias=conseguirCategorias($db); 
                if(!empty($categorias)):
                while($categoria = mysqli_fetch_assoc($categorias)):
                ?>

                <option value="<?=$categoria['idCategorias']?>">
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

    <?php require_once 'includes/pie.php';?>