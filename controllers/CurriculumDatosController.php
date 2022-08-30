<?php

namespace Controllers;

use Model\Administrar;//proyecto
use Model\CurriculumDatos;//tarea

class CurriculumDatosController {
    //api/tareas?id=5
    public static function index() {

        // funcion de javascript obtenerTareas()
        $administrarId = $_GET['id'];//saca el id del proyecto
        //ej. /proyecto?id=fba187d24a84efec14735c2d1c88d30b

        if(!$administrarId) header('Location: /propietario');//si no hay lo redirecciona

        $administrar = Administrar::where('url', $administrarId);//busca en la BD la tabla Proyecto, en la columna Url

        session_start();

        //si no existe el proyecto; 
        // o si el propietario el que creo el proyecto, su id es diferente a la SESSION del id
        // o sea si la persona que inicio sesion(SESSION ID) es diferente al propietario del proyecto
        if(!$administrar || $administrar->propietarioId !== $_SESSION['id']) header('Location: /pagina_no_encontrada');//se redirecciona

        $curriculumDatos = CurriculumDatos::belongsTo('administrarId', $administrar->id);//en tareas esta asociado a un mayor o sea a un proyecto 
        //o sea en Tabla Tareas, en columna proyectoId obtiene todos los resultados en Tabla Proyectos en la columna Id
        // debuguear($curriculumDatos);

        echo json_encode(['curriculumDatos' => $curriculumDatos]);
    }

    public static function curriculumPublico() {
        $curriculumDatos = CurriculumDatos::all();//obtiene todos los curriculumDatos de la base de datos 
        echo json_encode($curriculumDatos);//lo imprime en un json que lo puede leer con javascript por medio de async await
    }

    //api/tarea/
    public static function crear() {
        // funcion de javascript agregarTarea(tarea)
        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            session_start();

            $administrarId = $_POST['administrarId'];//esto son los datos que se enviaron en POST por medio de JS en json

            $administrar = Administrar::where('url', $administrarId);//aqui se obiene un proyecto

            //si no existe el proyecto; 
            // o si el propietario el que creo el proyecto, su id es diferente a la SESSION del id
            // o sea si la persona que inicio sesion(SESSION ID) es diferente al propietario del proyecto 
            if(!$administrar || $administrar->propietarioId !== $_SESSION['id']) {
                $respuesta = [
                    'tipo' => 'error',
                    'mensaje' => 'Hubo un Error al agregar los datos'
                ];
                echo json_encode($respuesta);//aqui le da una respuesta por medio de json a JS
                return;//hace que no se ejecute las siguientes lineas 
            } 
            
            // Todo bien, instanciar y crear la tarea
            $curriculum = new CurriculumDatos($_POST);
            $curriculum->administrarId = $administrar->id;
            $resultado = $curriculum->guardar();
            $respuesta = [
                'tipo' => 'exito',
                'id' => $resultado['id'],
                'mensaje' => 'Datos Creada Correctamente',
                'administrarId' => $administrar->id,
                
            ];
            echo json_encode($respuesta);
        }
    }

    //api/tarea/actualizar
    public static function actualizar() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Validar que el proyecto exista
            $administrar = Administrar::where('url', $_POST['administrarId']);

            session_start();

            //si la proyecto no existe o si la persona que lo creo es diferente 
            if(!$administrar || $administrar->propietarioId !== $_SESSION['id']) {
                $respuesta = [
                    'tipo' => 'error',
                    'mensaje' => 'Hubo un Error al actualizar el Curriculum'
                ];
                echo json_encode($respuesta);
                return;
            } 

            $curriculumDatos = new CurriculumDatos($_POST);
            $curriculumDatos->administrarId = $administrar->id;

            $resultado = $curriculumDatos->guardar();
            if($resultado) {
                $respuesta = [
                    'tipo' => 'exito',
                    'id' => $curriculumDatos->id,   
                    'administrarId' => $administrar->id,
                    'mensaje' => 'Actualizado correctamente',
                    'parrafo' => 'Cierre la notificación'
                ];
                echo json_encode(['respuesta' => $respuesta]);
            }

        }
    }

    //api/tarea/eliminar
    public static function eliminar() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Validar que el proyecto exista
            $administrar = Administrar::where('url', $_POST['administrarId']);

            session_start();

            if(!$administrar || $administrar->propietarioId !== $_SESSION['id']) {
                $respuesta = [
                    'tipo' => 'error',
                    'mensaje' => 'Hubo un Error al actualizar el Curriculum'
                ];
                echo json_encode($respuesta);
                return;
            } 

            $curriculum = new CurriculumDatos($_POST);
            $resultado = $curriculum->eliminar();


            $resultado = [
                'resultado' => $resultado,
                'mensaje' => 'Eliminado Correctamente',
                'tipo' => 'exito'
            ];
            
            echo json_encode($resultado);
        }
    }
}