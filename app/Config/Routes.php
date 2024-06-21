<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/quienesSomos', 'QuienesSomos::vista');
$routes->get('/acercaDe', 'AcercaDe::vista');
$routes->get('/registro', 'Registro::vista');
$routes->get('/login', 'Registro::vistaLogin');