<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */



$routes->get('/user', 'HomeController::index');
$routes->get('user/edit/(:num)', 'UserController::edit/$1');
$routes->post('user/update/(:num)', 'UserController::update/$1');
$routes->post('user/delete/(:num)', 'UserController::delete/$1');





$routes->post('/signin/loginAuth', '\App\Controllers\SigninController::loginAuth');

$routes->get('/shop', 'OrdersController::shop');


$routes->get('/insert', 'AdminController::insert');
$routes->get('/reports', 'AdminController::reports');
$routes->get('/contact', 'AdminController::contact');
$routes->get('/about', 'AdminController::about');
$routes->post('/insert', 'AdminController::insert_Prod');
$routes->delete('/delete/(:num)', 'AdminController::delete/$1');
$routes->get('/get-product/(:num)', 'AdminController::getProduct/$1');
$routes->post('/update/(:num)', 'AdminController::update/$1');
$routes->get('/get-image-url/(:any)', 'AdminController::getImageUrl/$1');
$routes->get('/update/(:num)', 'AdminController::updateForm/$1');
$routes->post('/update/(:num)', 'AdminController::update/$1');
$routes->get('/get-products-by-category/(:num)', 'HomeController::getProductsByCategory/$1');

$routes->get('/register', '\App\Controllers\UserController::register');
$routes->get('/admin_register', '\App\Controllers\UserController::admin_register');
$routes->post('/user/store', '\App\Controllers\UserController::store');
$routes->get('/', '\App\Controllers\SigninController::login');
$routes->post('/signin/loginAuth', '\App\Controllers\SigninController::loginAuth', ['filter' => 'authGuard']);
$routes->get('/profile', 'ProfileController::index',['filter' => 'authGuard']);

$routes->get('/admin', 'AdminController::admin');
$routes->get('/cart', 'CartController::cart');
$routes->post('orders/store', 'OrdersController::store');


//add to cart

// Define a route for adding products to the cart

//members registration list

$routes->get('/members', 'Members::index');


//$routes->get('/shop', 'CartController::cart');



// app/Config/Routes.php


$routes->get('event', 'Event::index');
$routes->get('create', 'Event::create');
$routes->post('events/store', 'Event::store');
$routes->get('events/edit/(:num)', 'Event::edit/$1');
$routes->post('events/update/(:num)', 'Event::update/$1');
$routes->get('events/delete/(:num)', 'Event::delete/$1');



//workshop


$routes->get('workshop', 'Workshop::index');
$routes->get('workshop/create', 'Workshop::create');
$routes->post('workshop/store', 'Workshop::store');
$routes->get('workshop/edit/(:num)', 'Workshop::edit/$1');
$routes->post('workshop/update/(:num)', 'Workshop::update/$1');
$routes->get('workshop/delete/(:num)', 'Workshop::delete/$1');
$routes->get('Admin_index', 'Workshop::Admin_index');



//joining in the workshop

$routes->get('joining', 'Joining::index');
$routes->get('joining/create', 'Joining::create');
$routes->post('joining', 'Joining::store');
$routes->get('joining/edit/(:num)', 'Joining::edit/$1');
$routes->post('joining/update', 'Joining::update');
$routes->get('joining/delete/(:num)', 'Joining::delete/$1');



//seller side

$routes->get('/seller/sellerindex', 'SellerController::sellerindex');
$routes->get('/seller', 'SellerController::index');
$routes->get('/seller/create', 'SellerController::create');
$routes->post('/seller/store', 'SellerController::store');
$routes->get('/seller/sellerAdmin', 'SellerController::sellerAdmin');

$routes->get('/seller/edit/(:num)', 'SellerController::edit/$1');
$routes->post('/seller/update/(:num)', 'SellerController::update/$1');
$routes->get('/seller/delete/(:num)', 'SellerController::delete/$1');
// In app/Config/Routes.php




//orders

$routes->get('orders', 'OrdersController::index');
$routes->get('orders/create', 'OrdersController::create');
$routes->post('orders/store', 'OrdersController::store');
$routes->get('orders/edit/(:num)', 'OrdersController::edit/$1');
$routes->post('orders/update/(:num)', 'OrdersController::update/$1');
$routes->get('orders/delete/(:num)', 'OrdersController::delete/$1');
$routes->match(['get','post'],'/cart', 'OrdersController::index_cart');




//documnets
// app/Config/Routes.php


$routes->get('/documentaries', 'Documentaries::index');
$routes->get('/documentaries/create', 'Documentaries::create');
$routes->post('/documentaries/store', 'Documentaries::store');
$routes->get('/documentaries/edit/(:num)', 'Documentaries::edit/$1');
$routes->post('/documentaries/update/(:num)', 'Documentaries::update/$1');
$routes->get('/documentaries/delete/(:num)', 'Documentaries::delete/$1');

$routes->get('/generate-report', 'Documentaries::generateReport');



//upload
$routes->get('upload', 'Upload::index');
$routes->post('upload/do_upload', 'Upload::do_upload');
$routes->get('upload/success', 'Upload::success');
$routes->get('upload/failure', 'Upload::failure');
$routes->get('File', 'Upload::upload');









