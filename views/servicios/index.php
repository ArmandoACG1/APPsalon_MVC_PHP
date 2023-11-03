<h1 class="nombre-pagina">SERVICIOS</h1>
<p class="descripcion-pagina">Administración de Servicios</p>



<?php
include_once __DIR__ . '/../templates/barra.php';
?>


<ul class="servicios">

<?php foreach($servicios as $servicio) {?>

    <li>
        <p>Nombre: <span><?php echo $servicio->nombre; ?></span></p>
        <p>Precio: <span>$<?php echo $servicio->precio; ?></span></p>



        <div class="acciones">
            <a href="/servicios/actualizar?id=<?php echo $servicio->id;?> " class="boton">Actualizar</a>

            <form action="/servicios/eliminar" method="post">

                <input type="hidden" name="id" value="<?php echo $servicio->id;?>">

                <input class="boton-eliminar" type="submit" value="Borrar">
            </form>
            
        </div>

    </li>


    <?php };?>
</ul>