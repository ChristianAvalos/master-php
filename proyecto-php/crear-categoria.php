    <!-- Incluir Cabecera -->
    <?php require_once 'includes/redireccion.php';?>
   <!-- Incluir Cabecera -->
    <?php require_once 'includes/cabecera.php';?>
    <!-- Incluir Barra lateral -->
    <?php require_once 'includes/lateral.php';?>
    <!-- Caja Principal -->
    <div id="principal">
        <h1>Crear categorias</h1>
        <p>Añade nuevas categorias al bloc para que los usuarios puedan usar al crear sus entradas </p>
        <br/>
        <form action="guardar-categoria.php" method="POST">
            <label for="nombre" >Nombre:</label>
            <input type="text" name="nombre"/>

            <input type="submit" value="Guardar"/>

        </form>
        
    </div><!-- Fin Principal -->

    <?php require_once 'includes/pie.php';?>