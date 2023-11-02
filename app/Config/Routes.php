<?php

use App\Controllers\CustomerController;
use App\Controllers\SellerController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', [CustomerController::class, 'landingpage']);

// ? Customer
// $routes->get('/', 'Home::index');
$routes->get('/customer/signin', [CustomerController::class, 'sign_in']);
$routes->get('/customer/signup', [CustomerController::class, 'registerPembeli']);
$routes->get('/customer/forgotpass', [CustomerController::class, 'forgot_password']);

// ? Seller
// $routes->get('/seller', 'Seller\Home::index'); 
$routes->get('/seller/signup', [SellerController::class, 'registerPenjual']);

// ? Admin
// $routes->get('/admin/signin', 'Admin\Home::index');


