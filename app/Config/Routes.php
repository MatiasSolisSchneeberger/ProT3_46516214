<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('productos', 'Home::productos');
$routes->get('productos/iphone', 'Home::iPhone16ProMax');
$routes->get('sobre-nosotros', 'Home::SobreNosotros');
$routes->get('acerca-de', 'Home::AcercaDe');
$routes->get('registrarse', 'Home::Registrarse');
$routes->get('iniciar-sesion', 'Home::IniciarSesion');

/* Rutas de usuarios */
$routes->get('/registro','UserController::create');
$routes->post('/enviar-form','UserController::formValidation');

/* rutas del login */
$routes->get('/IniciarSesion', 'Login_controller');
$routes->post('/enviarlogin','Login_controller::auth');
$routes->get('/panel', 'Panel_controller::index',['filter' => 'auth']);
$routes->get('/logout', 'Login_controller::logout');