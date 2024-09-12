<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/home', 'AuthController::home');
$routes->get('/newtask', 'AuthController::newtask');
$routes->get('/register', 'AuthController::register');
$routes->post('/register', 'AuthController::process_register');
$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::process_login');
$routes->get('/profile', 'AuthController::profile');
$routes->post('/newtask', 'TaskController::process_newtask');
$routes->get('/update/(:num)', 'TaskController::update/$1');
$routes->post('/update', 'TaskController::process_update/$1');
$routes->get('/delete/(:num)', 'TaskController::delete/$1');
$routes->get('/dashboard', 'TaskController::dashboard', ['filter' => 'auth']);
$routes->get('/newtask', 'TaskController::newtask', ['filter' => 'auth']);
$routes->get('/logout', 'AuthController::logout');
$routes->get('/profile', 'AuthController::profile', ['filter' => 'auth']);