<?php

use App\Controllers\CustomerController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// ? Customer
$routes->get('/', 'Home::index');
$routes->get('/customer/signin', [CustomerController::class, 'sign_in']);
$routes->get('/customer/forgotpass', [CustomerController::class, 'forgot_password']);

// ? Seller
// $routes->get('/seller', 'Seller\Home::index'); 

// ? Admin
// $routes->get('/admin/signin', 'Admin\Home::index');

$routes->get('register_pembeli', 'Home::registerPembeli');
$routes->get('register_penjual', 'Home::registerPenjual');
$routes->get('/beranda', 'Home::beranda');

$routes->get('/landingpage', 'Home::landingpage');
$routes->get('/landingpage2', 'Home::landingpage2');

