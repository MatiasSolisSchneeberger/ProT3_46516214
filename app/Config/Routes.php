<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('productos', 'Home::productos');
$routes->get('productos/iphone', 'Home::iPhone16ProMax');

// Rutas para categorías de productos con formato /categoria/[categoria]
$routes->get('categoria/smartphones', 'Home::categoria');
$routes->get('categoria/laptops', 'Home::categoria');
$routes->get('categoria/tablets', 'Home::categoria');
$routes->get('categoria/accesorios', 'Home::categoria');

$routes->get('sobre-nosotros', 'Home::SobreNosotros');
$routes->get('acerca-de', 'Home::AcercaDe');

/* Rutas de usuarios */
$routes->get('/registrarse','UserController::create');
$routes->post('/enviar-form','UserController::formValidation');

/* rutas del login */
$routes->get('/IniciarSesion', 'LoginController::index');
$routes->post('/enviar-login','LoginController::auth');
$routes->get('/MiPerfil', 'PanelController::index',['filter' => 'auth']);
$routes->get('/logout', 'LoginController::logout');