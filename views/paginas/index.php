<section class=" fondo-gradiente margin-top flex-centrar">
    <div class="contenedor dos-columnas-responsive bienvenida">

        <div class="datos-principales">
            <h1 class="decoracion-titulos h1-titulo">Desarrollador Web</h1>
            <p>Soy <span>Ari Gómez</span>, ayudo a los negocios y empresas convirtiendo sus peticiones en Sitios Web </p>

            <a href="/contacto" class="boton-pri fondo-btn-negro">Adquiere tu Sitio Web</a>
            <a href="/portafolio" class="boton-transparente">Observar Portafolio</a>
        </div>

        <div class="flex-centrar menos-no">
            <div class="imagen-principal b-r-1">
                <picture>
                    <source type="image/avif" srcset="/build/img/ari-manos-dirigidas.avif" />
                    <source type="image/webp" srcset="/build/img/ari-manos-dirigidas.webp" />
                    <img media="(min-width: 768px)" loading="lazy" src="/build/img/ari-manos-dirigidas.png" alt="Foto Ari Gómez">
                </picture>

                <div class="rectangulo-imagen"></div>
            </div>
        </div>

    </div>

</section>


<!-- tipos de sitios web -->

<main class="contenedor seccion">

    <h2 class="decoracion-titulos text-center-r">Elige la mejor opción</h2>
    
    <div class="grid-tres-columnas-responsive">

        <div class="sitios-web b-r-1">

            <h3>Sitio Web<br>
                <span>Landige Page</span>
            </h3>
            <ul>
                <li>1 sección</li>
                <li>5 imagenes</li>
                <li>Formulario de contacto sencillo</li>
                <li>Google Analytics</li>
            </ul>

            <div class="precio-boton">
                <h4>$999<span>MXN aprox.</span></h4>
                <a href="/contacto" class="boton-pri">¡Quiero este!</a>
            </div>

        </div>
        <div class="sitios-web b-r-1">

            <h3>Sitio Web<br>
                <span>Basico</span>
            </h3>
            <ul>
                <li>4 secciónes</li>
                <li>10 imagenes</li>
                <li>Formulario de contacto (anti-spam)</li>
                <li>Testimoniales de clientes</li>
                <li>Google Analytics</li>
            </ul>

            <div class="precio-boton">
                <h4>$2999<span>MXN aprox.</span></h4>
                <a href="/contacto" class="boton-pri">¡Quiero este!</a>
            </div>

        </div>
        <div class="sitios-web b-r-1">

            <h3>Sitio Web<br>
                <span>Autoadministrable</span>
            </h3>
            <ul>
                <li>4 secciónes</li>
                <li>15 imagenes</li>
                <li>Formulario de contacto (anti-spam)</li>
                <li>Contenido autoadministrable</li>
                <li>Google Analytics</li>
            </ul>

            <div class="precio-boton">
                <h4>$3999<span>MXN aprox.</span></h4>
                <a href="/contacto" class="boton-pri">¡Quiero este!</a>
            </div>

        </div>
        
    </div>

</main>


<!-- Proyectos -->
<section class="contenedor seccion dos-columnas-responsive">
    <div>
        <h2 class="decoracion-titulos">Proyectos</h2>
        <p>Durante este tiempo he desarrollado varios Sitios Web para diferentes clientes con requerimientos específicos.</p>
        <p>He realizado entradas de Blogs, secciones para mostrar servicios o productos dinámicamente, y la tendencia del modo oscuro en la web, entre otros.</p>

        <a href="/portafolio" class="boton-pri">Ver Portafolio</a>

    </div>
    <div class="flex-centrar ">
        <picture>
            <source type="image/avif" srcset="/build/img/imagen-ecutronic.avif" />
            <source type="image/webp" srcset="/build/img/imagen-ecutronic.webp" />
            <img loading="lazy" class="b-r-1 imagen-proyecto" src="/build/img/imagen-ecutronic.png"
                alt="Imagen de Pagina Ecutronic Computadoras Automotrices">
        </picture>
    </div>
</section>


<!-- Sobre mi -->
<section class="contenedor seccion dos-columnas-responsive ">
    <div class="flex-centrar hacia-abajo menos-no">
        <div class="imagen-principal b-r-1">
            <picture>
                <source type="image/avif" srcset="/build/img/ari-manos-cruzadas.avif" />
                <source type="image/webp" srcset="/build/img/ari-manos-cruzadas.webp" />
                <img media="(min-width: 768px)" loading="lazy" src="/build/img/ari-manos-cruzadas.png" alt="Foto Ari Gómez">
            </picture>

            <div class="rectangulo-imagen bg-pri"></div>
        </div>
    </div>

    <div class="sobre-mi">
        <h2 class="decoracion-titulos">Una pizca sobre mi</h2>
        <?php $fecha_actual = date("Y"); //2022
            $fecha_empezo = 2020;
        ?>
        <p>Me he dedicado al desarrollo web durante <?php echo $fecha_actual - $fecha_empezo;?> años, tengo estudios enfocados a la programación, implementando tecnologías nuevas para maquetar, diseñar y crear sitios web rápidamente.</p>

        <div>
            <h3>Tecnologías</h3>

            <div class="tecnologias">
                <img class="margen-derecha" loading="lazy" src="/build/img/html5.svg" alt="HTML">
                <img class="margen-derecha" loading="lazy" src="/build/img/css3.svg" alt="CSS3">
                <img class="margen-derecha" loading="lazy" src="/build/img/javascript.svg" alt="JavaScript">
                <img class="margen-derecha" loading="lazy" src="/build/img/php.svg" alt="PHP8">
                <img class="margen-derecha" loading="lazy" src="/build/img/gulp.svg" alt="Gulp">
                <img class="margen-derecha" loading="lazy" src="/build/img/sass.svg" alt="Sass">
                <img class="margen-derecha" loading="lazy" src="/build/img/adobe-xd.svg" alt="Adobe XD">
                <img class="margen-derecha" loading="lazy" src="/build/img/mysql.svg" alt="My SQL">
            </div>
        </div>

        <!-- Boton sobre mi -->
        <a href="/sobre_mi" class="boton-pri mas-no">Saber más</a>


        <div class="flex-centrar hacia-abajo mas-no">
            <div class="imagen-principal b-r-1">
                <picture>
                    <source type="image/avif" srcset="/build/img/ari-manos-cruzadas.avif" />
                    <source type="image/webp" srcset="/build/img/ari-manos-cruzadas.webp" />
                    <img media="(max-width: 767px)" loading="lazy" src="/build/img/ari-manos-cruzadas.png" alt="Foto Ari Gómez">
                </picture>

                <div class="rectangulo-imagen bg-pri"></div>
            </div>
        </div>

    <!-- Boton sobre mi -->
        <a href="/sobre_mi" class="boton-pri menos-no">Saber más</a>


    </div>

</section>

<section class=" seccion hidden testimoniales-seccion">

    <h2 class="decoracion-titulos contenedor text-center-r">Testimoniales</h2>

    <div class="testimoniales ">
        <blockquote class="no-margin">
            <h3> Jahziel Espinoza</h3>
            <div class="estrellas">
                <span></span><span></span><span></span><span></span><span></span>
            </div>
            <p>Excelente página web, me sirve bastante para mis clientes y para obtener más. Tiene un diseño que me gusta y el trato que me dio me da confianza. Aunque es un joven, sabe mucho, lo recomiendo</p>
        </blockquote>

        <blockquote class="no-margin">
            <h3>Martin Gómez</h3>
            <div class="estrellas">
                <span></span><span></span><span></span><span></span><span class="estrella-mitad"></span>
            </div>
            <p>El resultado fue fabuloso, siempre te hace preguntas para saber más sobre el negocio y hacer la página de acuerdo a lo que yo quiero, excelente trabajo!!!</p>
        </blockquote>

        <blockquote class="no-margin">
            <h3>Jesús Sagaón</h3>
            <div class="estrellas">
                <span></span><span></span><span></span><span></span><span class="estrella-mitad"></span>
            </div>
            <p>Siempre me ha respondido mis dudas, me ha agregado más seguridad a mi sitio y nuevas herramientas para saber de donde vienen mis clientes que visitan mi página web. Muy bien echa</p>
        </blockquote>
    </div>

</section>

<section class=" seccion fondo-gradiente flex-centrar sin-miedo-exito">
    <div class="contenedor flex-centrar column exito">
        <h3 class="text-center">¡Sin miedo al éxito! </h3>
        <a href="/contacto" class="boton-pri fondo-btn-negro">Adquiere tu Sitio Web</a>

    </div>
</section>