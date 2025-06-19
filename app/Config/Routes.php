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

