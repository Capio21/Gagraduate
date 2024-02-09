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
$routes->post('/user/store', '\App\Controllers\UserController::store');
$routes->get('/', '\App\Controllers\SigninController::login');
$routes->post('/signin/loginAuth', '\App\Controllers\SigninController::loginAuth', ['filter' => 'authGuard']);


$routes->get('/admin', 'AdminController::admin');


//add to cart

// Define a route for adding products to the cart

//members registration list

$routes->get('/members', 'Members::index');
$routes->get('/members/create', 'Members::create');
$routes->post('/members/store', 'Members::store');
$routes->get('/members/edit/(:num)', 'Members::edit/$1');
$routes->post('/members/update/(:num)', 'Members::update/$1');