<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('user/create', 'UserController::create');
$routes->get('/profile/(:any)/(:any)/(:any)', 'Home::profile/$1/$2/$3');
$routes->post('user/store', 'UserController::store');
//atau
// $routes->get('/profile/(:any)/(:any)/(:any)', [Home::class, 'profile']);