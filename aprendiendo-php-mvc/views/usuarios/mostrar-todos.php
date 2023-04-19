<h1>Lista de todos los usuarios</h1>
<?php while ($usuario=$todos_los_usuarios->fetch_object()):?>
    <?=$usuario->nombre?>-<?=$usuario->apellidos?>
        <br/>

<?php endwhile; ?>