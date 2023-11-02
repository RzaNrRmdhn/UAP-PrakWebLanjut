<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/beranda', 'Home::beranda');

$routes->get('/landingpage', 'Home::landingpage');
$routes->get('/landingpage2', 'Home::landingpage2');
