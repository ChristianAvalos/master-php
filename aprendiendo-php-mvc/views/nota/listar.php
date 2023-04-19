<h1>Listado de notas</h1>
<?php while ($nota=$notas->fetch_object()):?>
    <?=$nota->Titulo?>-<?=$nota->Descripcion?>
        <br/>

<?php endwhile; ?>