<main class="contenedor-formulario seccion-uno">

    <h1 class="decoracion-titulos text-center-r">Recuperar Password</h1>
    <p class="parrafo-destacado">Coloca tu nuevo password a continuación</p>

    <?php 
        include_once __DIR__ . "/../templates/alertas.php";
    ?>

    <?php if($error) return; ?>
    <form class="formulario" method="POST">
        <div class="form-input">
            <label for="password">Password</label>
            <input
                type="password"
                id="password"
                name="password"
                placeholder="Tu Nuevo Password"
            />
        </div>
        <input type="submit" class="boton-pri" value="Guardar Nuevo Password">

    </form>

    <div class="acciones">
        <a class="boton-transparente" href="/login">Iniciar Sesión</a>
        <!-- <a class="boton-transparente" href="/crear-cuenta">Crear cuenta</a> -->
    </div>
</main>
