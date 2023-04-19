<h1>Gestion de productos</h1>
<?php utils::deleteSesion('categoria')?>
<a href="<?=base_url?>Producto/crear" class="button button-samll">
    Craer producto
</a>

<?php
if(isset($_SESSION['producto']) && $_SESSION['producto']=='complete'):?>
    <strong class="alert_green">El producto se ha creado correctamente</strong>
<?php elseif(isset($_SESSION['producto']) && $_SESSION['producto']!='complete'):?>
    <strong class="alert_red">El registro no se ha creado correctamente</strong>
<?php endif;?>
<?php utils::deleteSesion('producto');?>

<?php
if(isset($_SESSION['delete']) && $_SESSION['delete']=='complete'):?>
    <strong class="alert_green">El producto se ha borrado correctamente</strong>
<?php elseif(isset($_SESSION['delete']) && $_SESSION['delete']!='complete'):?>
    <strong class="alert_red">El registro no se ha borrado</strong>
<?php endif;?>
<?php utils::deleteSesion('delete');?>

<table >
<tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>PRECIO</th>
        <th>STOCK</th>
        <th>ACCIONES</th>
    </tr>

<?php while ($pro=$productos->fetch_object()):?>
    <tr>
        <td><?=$pro->id?></td>
        <td><?=$pro->nombre?></td>
        <td><?=$pro->precio?></td>
        <td><?=$pro->stock?></td>
        <td>
            <a href="<?=base_url?>Producto/editar&id=<?=$pro->id?>" class="button button-gestion">Editar</a>
            <a href="<?=base_url?>Producto/eliminar&id=<?=$pro->id?>" class="button button-gestion button-red">Eliminar</a>
        
        </td>
    </tr>

<?php endwhile;?>
</table>