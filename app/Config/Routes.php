<?php

use App\Controllers\CustomerController;
use App\Controllers\SellerController;
use App\Controllers\AdminController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', [CustomerController::class, 'landingpage']); // Donse
// $routes->get('/landingpage', [CustomerController::class, 'landingpage']); // Done
// $routes->get('/', [CustomerController::class, 'homescreen']);

// ? Customer
// $routes->get('/', 'Home::index');
$routes->get('/customer/signin', [CustomerController::class, 'sign_in']); // done -> Just Need Some Auth Filters
$routes->get('/customer/signup', [CustomerController::class, 'registerPembeli']); // done
$routes->get('/customer/forgotpass', [CustomerController::class, 'forgot_password']); // done 
$routes->get('/customer/profile', [CustomerController::class, 'profilePembeli']);   // Need Connect To Database

$routes->get('/customer/home', [CustomerController::class, 'homescreen']); // Done
$routes->get('/customer/update_profile/(:any)', [CustomerController::class, 'updateProfile']);
$routes->put('/customer/update_profile/(:any)', [CustomerController::class, 'update']);

$routes->get('/customer/category/(:any)', [CustomerController::class, 'category_barang']);
$routes->get('/customer/grade/(:any)', [CustomerController::class, 'grade']);
$routes->post('/customer/buy', [CustomerController::class, 'beli_barang']);
$routes->get('/customer/details/product/(:any)', [CustomerController::class, 'detail_product']);

$routes->get('/customer/cart', [CustomerController::class, 'cart']);

// ? Seller Need to Connect To Database
// $routes->get('/seller', 'Seller\Home::index'); 
$routes->get('/seller/signup', [SellerController::class, 'registerPenjual']);
$routes->get('/seller/upload_barang', [SellerController::class, 'upload_barang']);
$routes->post('/seller/store', [SellerController::class, 'store']);

// ? Admin Need Connect To Database
// $routes->get('/admin/signin', 'Admin\Home::index');
$routes->get('/admin/dashboard', [AdminController::class, 'dashboard']);
$routes->get('/admin/list_admin', [AdminController::class, 'list_admin']);
$routes->get('/admin/list_seller', [AdminController::class, 'list_seller']);
$routes->get('/admin/list_customer', [AdminController::class, 'list_customer']);
$routes->get('/admin/admin_profile', [AdminController::class, 'admin_profile']);
$routes->get('/admin/create_admin', [AdminController::class, 'create_admin']);
$routes->post('/admin/store', [AdminController::class, 'store']);
$routes->get('/admin/payment_acc', [AdminController::class, 'payment_acc']);
$routes->get('/admin/grade_admin', [AdminController::class, 'grade_admin']);
