<section class="seccion-uno flex-centrar ">
    <div class="contenedor entrada">
        <h1 class="text-center decoracion-titulos">Contacto</h1>

    </div>
</section>

<main class="contenedor-formulario seccion">

    <p class="parrafo-destacado">Es muy arriesgado conformarte con soluciones baratas o plantillas genéricas. Proporciono diseños personalizados a precios accesibles.</p>

    <h2 class="decoracion-titulos text-center-r">¿Cómo sería tu sitio web ideal?</h2>

    <?php include 'formulario.php'; ?>

</main>



<?php if($mensaje) { ?>
<div class="ventanaContacto ">

    <div class="flex-centrar column height">

        <div>
            <h2 class="decoracion-titulos">Se envió el formulario correctamente</h2>
            <p>Se le contactará por medio de <span>Télefono</span> o <span>WhatsApp</span>.</p>
            <p>¡Muchas gracias!</p>

            <div class="redes-sociales">

                <!-- <a href="https://www.facebook.com/arigomez04" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-facebook-f"></i>
                </a> -->

                <!-- <a href="https://m.me/arigomez04" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-facebook-messenger"></i>
                </a> -->

                <!-- <a href="http://instagram.com/ariamzi_?utm_source=qr" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-instagram"></i>
                </a> -->

                <a href="https://api.whatsapp.com/send?phone=+528113257604" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-whatsapp"></i>
                </a>
                
                <a href="tel:+528113257604" target="_blank" rel="noopener noreferrer">
                    <i class="fas fa-phone"></i>
                </a>

            </div>

            <!-- <div class="boton-pri btnCerrarVentana">
            Cerrar
            </div> -->
            <a href="/contacto" class="boton-pri btnCerrarVentana">Cerrar</a>

        </div>

    </div>
</div>

<?php } ?>

<!-- whatsapp -->
<a href="https://api.whatsapp.com/send?phone=+528113257604" target="_blank" rel="noopener noreferrer">
    <div class="flex-centrar whatsapp">
        <i class="fab fa-whatsapp"></i>
    </div>
</a>

