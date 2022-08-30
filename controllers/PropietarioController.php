<?php

namespace Controllers;

use MVC\Router;
use Model\Propietario;//usuario
use Model\Administrar;//proyecto


class PropietarioController {
    public static function index(Router $router) {

        session_start();
        isAuth();

        $id = $_SESSION['id'];

        //proyecto (que pertenece a...) propietario id
        //belongsTo trae todos los resultados de la columna del id del Usuario
        $administrar = Administrar::belongsTo('propietarioId', $id);

        $router->render('propietario/index', [
            'administrar' => $administrar,
            'descripcion' =>  "Escoge el curriculum tuyo",
            'title' => "Ari Gómez | Admin ",
        ]);
    }

    public static function crear_curriculum(Router $router) {
        session_start();
        isAuth();
        $alertas = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $administrar = new Administrar($_POST);

            // validación
            $alertas = $administrar->validarCurriculum();

            if(empty($alertas)) {
                // Generar una URL única 
                $hash = md5(uniqid());
                $administrar->url = $hash;

                // Almacenar el creador del proyecto
                $administrar->propietarioId = $_SESSION['id'];

                // Guardar el Proyecto
                $administrar->guardar();
                // debuguear($administrar);
                // Redireccionar

                header('Location: /administrar-curriculum?id=' . $administrar->url);

            }
        }

        $router->render('propietario/crear-curriculum', [
            'alertas' => $alertas,
            'descripcion' =>  "Escribe de quien es el curriculum",
            'title' => "Ari Gómez | Crear Curriculum ",
        ]);
    }

    public static function administrar_curriculum(Router $router) {
        session_start();
        isAuth();

        $token = $_GET['id'];//es el token o id de 32 caracteres
        // debuguear($token);

        if(!$token) header('Location: /propietario');
        // Revisar que la persona que visita el proyecto, es quien lo creo
        $administrar = Administrar::where('url', $token);//url es la columna de la BD y el token es la URL de 32 caracteres

        //si el id del propietario(ususario) es diferente al id que se inicio sesion(se guardo en la session) se redirecciona
        if($administrar->propietarioId !== $_SESSION['id']) {
            header('Location: /propietario');
        }

        $router->render('propietario/administrar-curriculum', [
            // 'titulo' => $administrar->proyecto,
            'descripcion' =>  "Administrar Curriculum",
            'title' => 'Curriculum | ' . $administrar->curriculum,
            'curriculum' => false,
            // 'modoOscuroSwal' => true

        ]);
    }

    public static function perfil(Router $router) {
        session_start();
        isAuth();
        $alertas = [];//para que no marque errores

        $usuario = Propietario::find($_SESSION['id']);//find (trae todo los datos del usuario con su id)(el id se guardo en la Session cuando se creo el usuario)

        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $usuario->sincronizar($_POST);//sincroniza (actualiza los cambios) los datos nuevos que se escriben en los inputs del formulario

            $alertas = $usuario->validar_perfil();

            if(empty($alertas)) {

                $existeUsuario = Propietario::where('email', $usuario->email);

                //si pudo encontrar el usuario (significa que ya hay un usuario registrado) 
                //ese usuario que existe en la BD tiene que ser diferente al que esta usuario autenticado
                //evita que pongas un email ya registrado y que 
                //y que eres tu el que estas solicitando el cambio
                if($existeUsuario && $existeUsuario->id !== $usuario->id ) {
                    // Mensaje de error
                    Propietario::setAlerta('error', 'Email no válido, ya pertenece a otra cuenta');
                    $alertas = $usuario->getAlertas();
                } else {
                    // Guardar el registro
                    $usuario->guardar();

                    Propietario::setAlerta('exito', 'Guardado Correctamente');
                    $alertas = $usuario->getAlertas();

                    // Asignar el nombre nuevo a la barra
                    $_SESSION['nombre'] = $usuario->nombre;//no importa si el nombre no lo cambiaron, esta session va a agarrar los ultimos cambios o valores, va a tener la ultima instancia
                }
            }
        }
        
        $router->render('propietario/perfil', [
            'titulo' => 'Perfil',
            'usuario' => $usuario,
            'alertas' => $alertas
        ]);
    }

    //aqui no

    public static function cambiar_password(Router $router) {
        session_start();
        isAuth();

        $alertas = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = Propietario::find($_SESSION['id']);//find (trae todo los datos del usuario con su id)(el id se guardo en la Session cuando se creo el usuario)(identifica al usuario que quiere cambiar su password)

            // Sincronizar con los datos del usuario
            $usuario->sincronizar($_POST);

            $alertas = $usuario->nuevo_password();

            if(empty($alertas)) {
                $resultado = $usuario->comprobar_password();

                if($resultado) {
                    $usuario->password = $usuario->password_nuevo;//aqui es donde se reescribe el password anterior con el nuevo que el usuario acababa de escribir

                    // Eliminar propiedades No necesarias del objeto
                    unset($usuario->password_actual);
                    unset($usuario->password_nuevo);

                    // Hashear el nuevo password
                    $usuario->hashPassword();

                    // Actualizar
                    $resultado = $usuario->guardar();

                    if($resultado) {
                        Propietario::setAlerta('exito', 'Password Guardado Correctamente');
                        $alertas = $usuario->getAlertas();
                    }
                } else {
                    Propietario::setAlerta('error', 'Password Incorrecto');
                    $alertas = $usuario->getAlertas();
                }
            }
        }

        $router->render('propietario/cambiar-password', [
            'titulo' => 'Cambiar Password',
            'alertas' => $alertas
         ]);
    }
}