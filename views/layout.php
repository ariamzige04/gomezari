<!DOCTYPE html>
<html lang="es" id="ari">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $title ?? ''; ?>
    </title>
    <meta name="description" content="<?php echo $descripcion ?? '';?>">

    <!-- hoja de estilos CSS -->
    <link rel="stylesheet" href="/build/css/app.css">
    
    <?php 
    if(isset($curriculum)) {
        // tipografias de google fonts para curriculum
        echo '<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Montserrat:wght@400;700&family=Poppins:wght@400;600&display=swap" rel="stylesheet">';
    } else {
        // tipografias de google fonts 
        echo '<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Poppins:wght@400;600&display=swap"
            rel="stylesheet">';
    }
    ?>
    
    <!-- icono -->
    <link rel="shortcut icon" href="/build/img/icono-ari.svg" type="image/x-icon">


    <!-- Recapcha anti bots -->
    <script src='https://www.google.com/recaptcha/api.js?render=6LfHv4EfAAAAABSJFiw6I27Ku7m5OI7R5YdR9Ykg'></script>
    <script>
        grecaptcha.ready(function() {
        grecaptcha.execute('6LfHv4EfAAAAABSJFiw6I27Ku7m5OI7R5YdR9Ykg', {action: 'formulario'})
        .then(function(token) {
        var recaptchaResponse = document.getElementById('recaptchaResponse');
        recaptchaResponse.value = token;
        });});
    </script>

    <!-- Google analitycs -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-EBKFT6KDJ8"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-EBKFT6KDJ8');
    </script>

</head>

<!-- fijar-body -->
<body class="body fijar-body">


    <!-- Loading HTML -->
    <div class="loader-fondo">
        <div class="newtons-cradle">
            <div class="newtons-cradle__dot"></div>
            <div class="newtons-cradle__dot"></div>
            <div class="newtons-cradle__dot"></div>
            <div class="newtons-cradle__dot"></div>
        </div>
    </div>
    
    <!-- fin loader -->

    <header class="header ">

        <div class=" barra-nav">
            <div class="contenedor barra-nav-hijo">

                <div class="logo">
                    <a href="/">
                        <img loading="lazy" src="/build/img/logo-ari.svg" alt="Logo Ari Gomez">
                    </a>

                    <div class="flex-centrar navegacion-iconos-padre">
                        <nav class="nav">

                            <div class="enlace-navegacion">
                                <a class="nav-hijos" href="/">Inicio</a>

                            </div>

                            <div class="enlace-navegacion">
                                <a class="nav-hijos" href="/portafolio">Portafolio</a>

                            </div>

                            <div class="enlace-navegacion">
                                <a class="nav-hijos" href="/sobre_mi">Sobre mi</a>

                            </div>

                            <div class="enlace-navegacion">
                                <a class="nav-hijos" href="/contacto">Contacto</a>

                            </div>

                            <?php if(isset($_SESSION['admin'])) { ?>
                                <div class="enlace-navegacion">
                                    <a class="nav-hijos" href="/logout">Cerrar Sesión</a>

                                </div>
                            <?php } ?>



                        </nav>
                    </div>
                </div>
                <div class="flex-centrar iconos-nav">

                    <!-- Modo oscuro -->
                    <div class="btn-modo-oscuro ">
                        <div class="sun sun-logo">
                            <i class="fas fa-sun"></i>
                        </div>
                        <div class="moon moon-logo">
                            <i class="fas fa-moon"></i>
                        </div>
                    </div>

                    <!-- Menu hamburguesa -->
                    <div id="menu-toggle">
                        <div id="hamburger">
                            <span class="span"></span>
                            <span class="span"></span>
                            <span class="span"></span>
                        </div>
                        <div id="cross">
                            <span class="span"></span>
                            <span class="span"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- No quitar -->
        <div class="pantallaCompleta"></div>

    </header>
    <!-- fin del header y navegacion -->


    <!-- contenido NO QUITAR -->
    <?php echo $contenido; ?>

    <!-- footer -->
    <footer class="footer flex-centrar  <?php echo $footerAbsolute ?? ''; ?>">
        <p>Sitio Oficial de <span>Ari Gómez</span> <?php echo date('Y'); ?>  </p>
        <a href="https://github.com/ariamzige04" target="_blank" rel="noopener noreferrer">
            <i class="fab fa-github"></i>
            <!-- <i class="fa-brands fa-square-github"></i> -->
        </a>
    </footer>

    <!-- scripts de javascript -->
    <script src="https://kit.fontawesome.com/6e572cb92e.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/build/js/app.js"></script>

    <?php echo $script ?? ''; ?>


</body>
</html>