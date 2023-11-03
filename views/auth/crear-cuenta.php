<h1 class="nombre-pagina">Crear Cuenta</h1>
<p class="descripcion-pagina">Llena el siguiente formulario para crear cuenta</p>


<?php 

include_once __DIR__ . "/../templates/alertas.php";

?>


<form  method="post" class="formulario" action="/crear-cuenta">


<div class="campo">
<label for="nombre">Nombre</label>
<input value="<?php echo s($usuario->nombre)?>" type="text" id="nombre" name="nombre" placeholder="Tu nombre">
</div>


<div class="campo">
<label for="apellido">Apellido</label>
<input value="<?php echo s($usuario->apellido)?>" type="text" id="apellido" name="apellido" placeholder="Tu apellido">
</div>


<div class="campo">
<label for="apellido">Telefono</label>
<input value="<?php echo s($usuario->telefono)?>" type="tel" id="telefono" name="telefono" placeholder="Tu telefono">
</div>


<div class="campo">
<label for="email">Email</label>
<input value="<?php echo s($usuario->email)?>" type="email" id="email" name="email" placeholder="Tu email">
</div>


<div class="campo">
<label for="password">Password</label>
<input  type="password" id="password" name="password" placeholder="Tu password">
</div>

<input class="boton" type="submit" value="Crear Cuenta">


</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia Sesion?</a>
    <a href="/olvide">¿Olvidaste tu password?</a>
</div>