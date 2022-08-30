<!-- <main class="contenedor-secundario seccion-uno ">
    <h1 class=" decoracion-titulos">Empiece creando un curriculum</h1>

    <a class="boton-pri" href="/crear-curriculum">Crear Curriculum</a>


</main> -->

<main class="contenedor-secundario seccion-uno h-100">
    <h1 class=" decoracion-titulos">Entrar a editar el curriculum</h1>
    <?php foreach($administrar as $curriculum) { ?>

    <a class="boton-pri" href="/administrar-curriculum?id=<?php echo $curriculum->url; ?>">
        Editar curriculum de <?php echo $curriculum->curriculum; ?>
    </a>

    <?php } ?>

</main>