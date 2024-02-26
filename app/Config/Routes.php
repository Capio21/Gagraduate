<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */



$routes->get('/user', 'HomeController::index');




$routes->post('/signin/loginAuth', '\App\Controllers\SigninController::loginAuth');

$routes->get('/shop', function () {
    return view('include/shop');
});

$routes->get('/insert', 'AdminController::insert');
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


$routes->get('/admin', 'AdminController::admin');
$routes->get('/cart', 'CartController::cart');



//add to cart

// Define a route for adding products to the cart

//members registration list

$routes->get('/members', 'Members::index');


$routes->get('/shop', 'CartController::cart');



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









