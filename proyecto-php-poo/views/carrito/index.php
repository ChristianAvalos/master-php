<h1>Carrito de la compra</h1>
<?php if(isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1):?>
<table>
    <tr>
        <th>Imagen</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Unidades</th>
        <th>Eliminar</th>
    </tr>

    <?php 
        foreach($carrito as $indice => $elemento ):
        $producto = $elemento['producto'];
    ?>

    <tr>
        <td>
            <?php if($producto->imagen != null):?>
                <img src="<?=base_url?>uploads/images/<?=$producto->imagen?>" class="img_carrito" />
            <?php else: ?>
                <img src="<?=base_url?>assets/img/camiseta.png" class="img_carrito"  />
            <?php endif;?>    
        </td>
        <td>
            <a href="<?=base_url?>Producto/ver&id=<?=$producto->id?>"><?=$producto->nombre?></a>
        </td>
        <td>
            <?=$producto->precio?>
        </td>
        <td>
            <?=$elemento['unidades']?>
            <div class="updown-unidades">
                <a href="<?=base_url?>Carrito/up&index=<?=$indice?>" class="button">+</a>
                <a href="<?=base_url?>Carrito/down&index=<?=$indice?>" class="button">-</a>
            </div>
        </td>
        <td>
        <a href="<?=base_url?>Carrito/delete&index=<?=$indice?>" class="button button-carrito button-red">Quitar producto</a>
        </td>
    </tr>
    <?php endforeach;?>

</table>
<br/>

<div class="delete-carrito">
    <a href="<?=base_url?>Carrito/delete_all" class="button button-delete button-red">Vaciar carrito</a>
</div>

<div class="total-carrito">
    <?php $stats = utils::statsCarrito();?>
    <h3>Precio total: <?=$stats['total']?> Gs.</h3>
    <a href="<?=base_url?>Pedido/hacer" class="button button-pedido">Hacer pedido</a>
</div>
<?php else:?>
    <p>EL carrito esta vacio, añade algun producto</p>
<?php endif;?>