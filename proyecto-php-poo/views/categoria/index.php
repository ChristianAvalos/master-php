<h1>Gestionar categorias</h1>
<?php if (isset($_SESSION['categoria']) && $_SESSION['categoria']== "Completado" ): ?>
        <strong class="alert_green">Categoria guardada correctamente</strong>
    <?php elseif(isset($_SESSION['categoria']) && $_SESSION['categoria']== "Fallo"):?>
        <strong class="alert_red">Registro fallido, introduce bien los datos</strong>
<?php endif;?>
<?php utils::deleteSesion('categoria')?>
<a href="<?=base_url?>Categoria/crear" class="button button-samll">
    Craer categoria
</a>
<table >
<tr>
        <th>ID</th>
        <th>Nombre</th>
    </tr>

<?php while ($cat=$categorias->fetch_object()):?>
    <tr>
        <td><?=$cat->id?></td>
        <td><?=$cat->nombre?></td>
    </tr>

<?php endwhile;?>
</table>