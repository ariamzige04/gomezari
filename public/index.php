<?php 
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../includes/app.php';


use MVC\Router;


use Controllers\PaginasController;
use Controllers\LoginController;
use Controllers\PropietarioController;
use Controllers\CurriculumDatosController;

$router = new Router();

//Zona privada ------------

// Iniciar Sesión
$router->get('/login', [LoginController::class, 'login']);
$router->post('/login', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);

// Recuperar Password
$router->get('/olvide', [LoginController::class, 'olvide']);
$router->post('/olvide', [LoginController::class, 'olvide']);
$router->get('/recuperar', [LoginController::class, 'recuperar']);
$router->post('/recuperar', [LoginController::class, 'recuperar']);

// Crear Cuenta
// $router->get('/crear-cuenta', [LoginController::class, 'crear']);
// $router->post('/crear-cuenta', [LoginController::class, 'crear']);

// Confirmar cuenta
// $router->get('/confirmar-cuenta', [LoginController::class, 'confirmar']);
// $router->get('/mensaje', [LoginController::class, 'mensaje']);

// AREA PRIVADA
// $router->get('/cita', [CitaController::class, 'index']);
// $router->get('/admin', [AdminController::class, 'index']);

// API de Citas
// $router->get('/api/servicios', [APIController::class, 'index']);
// $router->post('/api/citas', [APIController::class, 'guardar']);
// $router->post('/api/eliminar', [APIController::class, 'eliminar']);

//propietario
// ZONA DE PROYECTOS
$router->get('/propietario', [PropietarioController::class, 'index']);
// $router->get('/crear-curriculum', [PropietarioController::class, 'crear_curriculum']);
// $router->post('/crear-curriculum', [PropietarioController::class, 'crear_curriculum']);
$router->get('/administrar-curriculum', [PropietarioController::class, 'administrar_curriculum']);
// $router->get('/perfil', [PropietarioController::class, 'perfil']);
// $router->post('/perfil', [PropietarioController::class, 'perfil']);
// $router->get('/cambiar-password', [PropietarioController::class, 'cambiar_password']);
// $router->post('/cambiar-password', [PropietarioController::class, 'cambiar_password']);

// API para el curriculum
$router->get('/api/curriculum-datos', [CurriculumDatosController::class, 'index']);
$router->get('/api/curriculum-datos-publico', [CurriculumDatosController::class, 'curriculumPublico']);
// $router->post('/api/curriculum', [CurriculumDatosController::class, 'crear']);
$router->post('/api/curriculum/actualizar', [CurriculumDatosController::class, 'actualizar']);
// $router->post('/api/curriculum/eliminar', [CurriculumDatosController::class, 'eliminar']);


//Zona publica
$router->get('/', [PaginasController::class, 'index']);
$router->get('/portafolio', [PaginasController::class, 'portafolio']);
$router->get('/sobre_mi', [PaginasController::class, 'sobre_mi']);
$router->get('/contacto', [PaginasController::class, 'contacto']);
$router->post('/contacto', [PaginasController::class, 'contacto']);
$router->get('/pagina_no_encontrada', [PaginasController::class, 'pagina_no_encontrada']);
$router->get('/curriculum', [PaginasController::class, 'curriculum']);



// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();