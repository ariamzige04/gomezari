<main class="contenedor-formulario seccion-uno">

    <h1 class="decoracion-titulos text-center-r">Crear Cuenta</h1>
    <p class="parrafo-destacado">Llena el siguiente el formulario para crear una cuenta</p>

    <?php 
    include_once __DIR__ . "/../templates/alertas.php";
    ?>

    <form class="formulario" method="POST" action="/crear-cuenta">

        <div class="form-input">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" placeholder="Tu Nombre"
                value="<?php echo s($usuario->nombre); ?>" />
        </div>


        <div class="form-input">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="Tu E-mail"
                value="<?php echo s($usuario->email); ?>" />
        </div>

        <div class="form-input">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Tu Password" />
        </div>

        <input type="submit" value="Crear Cuenta" class="boton-pri">


    </form>

    <div class="acciones">
        <a class="boton-transparente" href="/login">Inicia Sesión</a>
        <a class="boton-transparente" href="/olvide">¿Olvidaste tu password?</a>
    </div>
</main>