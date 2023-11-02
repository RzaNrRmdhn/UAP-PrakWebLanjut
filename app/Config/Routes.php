<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('register_pembeli', 'Home::registerPembeli');
$routes->get('register_penjual', 'Home::registerPenjual');
