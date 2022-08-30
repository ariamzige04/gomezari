<main class="contenedor-formulario seccion-uno">

    <h1 class="decoracion-titulos text-center-r">Olvide Password</h1>
    <p class="parrafo-destacado">Reestablece tu password escribiendo tu email a continuación</p>

    <?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>

    <form class="formulario" action="/olvide" method="POST">
        <div class="form-input">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Tu Email" />
        </div>

        <input type="submit" class="boton-pri" value="Enviar Instrucciones">
    </form>

    <div class="acciones">
        <a class="boton-transparente" href="/login">Iniciar Sesión</a>
        <!-- <a class="boton-transparente" href="/crear-cuenta">Crear cuenta</a> -->
    </div>
</main>