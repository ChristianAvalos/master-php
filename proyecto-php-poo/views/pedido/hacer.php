<?php if(isset($_SESSION['identity'])) :?>
    <h1>Hecer pedidos</h1>
    <p>
        <a href="<?=base_url?>/Carrito/index">Ver los productos y el precio del pedido</a>
    </p>
    <br/>
    <H3>Direccion para el envio:</H3>
    <form action="<?=base_url.'Pedido/add'?>" method="POST">
        <labe for="provincia">Provincia</labe>
        <input type="text" name="provincia" required/>

        <labe for="localidad">Localidad</labe>
        <input type="text" name="localidad"required/>

        <labe for="direccion">Direccion</labe>
        <input type="text" name="direccion"required/>

        <input type="submit" value="Confirmar"/>
    </form>
<?php else:?>
    <h1>Necesitas estar identificado</h1>
    <p>Necesitar estar logueado en la web para poder realizar tu pedido </p>

<?php endif;?>