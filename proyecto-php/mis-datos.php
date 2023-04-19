    <!-- Incluir Cabecera -->
    <?php require_once 'includes/redireccion.php';?>
   <!-- Incluir Cabecera -->
    <?php require_once 'includes/cabecera.php';?>
    <!-- Incluir Barra lateral -->
    <?php require_once 'includes/lateral.php';?>
    <!-- Caja Principal -->
    <div id="principal">
    <h1>Mis datos</h1>
    <?php 
        if(isset($_SESSION['completado'])):?>
            <div class="alerta alerta-exito">
                <?= $_SESSION['completado']?>
            </div>
        <?php elseif(isset($_SESSION['errores']['general'])): ?>
            <div class="alerta alerta-error">
                <?= $_SESSION['errores']['general']?>
            </div>
            <?php endif;?>

        <form action="actualizar-usuario.php" method="POST">
            
            <label for="nombre">Nombres</label>
            <input type="text" name="nombre" value="<?=$_SESSION['usuario']['nombre']?>"/>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'nombre'): ''; ?>
            

            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" value="<?=$_SESSION['usuario']['apellidos']?>"/>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'apellidos'): ''; ?>

            <label for="email">Email</label>
            <input type="text" name="email" value="<?=$_SESSION['usuario']['email']?>"/>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'email'): ''; ?>

            
            <br/>
            <input type="submit" value="Actualizar" name="registrar"/>
        </form>
        
        <?php borrarErrores(); ?>

    </div><!-- Fin Principal -->






    <!-- Pie de pagina -->
    <?php require_once 'includes/pie.php';?>