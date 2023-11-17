<?php

use App\Controllers\CustomerController;
use App\Controllers\SellerController;
use App\Controllers\AdminController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// $routes->post('/', [CustomerController::class, 'homescreen']);
$routes->get('/', [CustomerController::class, 'homescreen']);

// ? Customer
// $routes->get('/', 'Home::index');
$routes->get('/customer/signin', [CustomerController::class, 'sign_in']);
$routes->get('/customer/signup', [CustomerController::class, 'registerPembeli']);
$routes->get('/customer/forgotpass', [CustomerController::class, 'forgot_password']);
$routes->get('/customer/profile', [CustomerController::class, 'profilePembeli']);

$routes->get('/customer/home', [CustomerController::class, 'homescreen']);
$routes->get('/customer/update_profile/(:any)', [CustomerController::class, 'updateProfile']);
$routes->put('/customer/update_profile/(:any)', [CustomerController::class, 'update']);

$routes->get('/customer/home', [CustomerController::class, 'homescreen']); 
$routes->get('/customer/category/shoes', [CustomerController::class, 'shoes']); 
$routes->get('/customer/grade', [CustomerController::class, 'grade']); 



// ? Seller
// $routes->get('/seller', 'Seller\Home::index'); 
$routes->get('/seller/signup', [SellerController::class, 'registerPenjual']);

// ? Admin
// $routes->get('/admin/signin', 'Admin\Home::index');
$routes->get('/admin/dashboard', [AdminController::class, 'dashboard']);
$routes->get('/admin/list_admin', [AdminController::class, 'list_admin']);
$routes->get('/admin/list_seller', [AdminController::class, 'list_seller']);
$routes->get('/admin/list_customer', [AdminController::class, 'list_customer']);
$routes->get('/admin/admin_profile', [AdminController::class, 'admin_profile']);
$routes->get('/admin/create_admin', [AdminController::class, 'create_admin']);
$routes->post('/admin/store', [AdminController::class, 'store']);

