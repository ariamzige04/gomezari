<main class="contenedor-formulario seccion-uno">


    <h1 class="decoracion-titulos text-center-r">Login</h1>
    <p class="parrafo-destacado">Inicia sesión con tus datos</p>

    <?php 
    include_once __DIR__ . "/../templates/alertas.php";
    ?>

    <form class="formulario" method="POST" action="/login">
        <div class="form-input">
            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Tu Email" name="email" />
        </div>

        <div class="form-input">
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Tu Password" name="password" />
        </div>

        <input type="submit" class="boton-pri" value="Iniciar Sesión">
    </form>

    <div class="acciones">
        <!-- <a class="boton-transparente" href="/crear-cuenta">Crear cuenta</a> -->
        <a class="boton-transparente" href="/olvide">¿Olvidaste tu password?</a>
    </div>

</main>