<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('register_pembeli', 'Home::registerPembeli');
$routes->get('register_penjual', 'Home::registerPenjual');
$routes->get('/beranda', 'Home::beranda');

$routes->get('/landingpage', 'Home::landingpage');
$routes->get('/landingpage2', 'Home::landingpage2');

