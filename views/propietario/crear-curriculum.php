
<main class="contenedor seccion-uno h-100">

    <h1 class="text-center-r decoracion-titulos">Crear Curriculum</h1>

    <?php include_once __DIR__ . '/../templates/alertas.php'; ?>

    <form class="formulario" method="POST" action="/crear-curriculum">
    <div class="form-input">
        <label for="curriculum">Curriculum de...</label>
        <input
            type="text"
            name="curriculum"
            id="curriculum"
            placeholder="Nombre del curriculum"
        />
    </div>
        <input class="boton-pri" type="submit" value="¡Vamos a empezar!">
    </form>

</main>