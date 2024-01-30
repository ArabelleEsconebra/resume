<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('all', 'PageController::website');
$routes->get('/', 'PageController::home');
$routes->get('about', 'PageController::about');
$routes->get('facts', 'PageController::facts');
$routes->get('education', 'PageController::education');
$routes->get('works', 'PageController::works');
$routes->get('contact', 'PageController::contact');
$routes->get('bulma', 'PageController::bulma');

$routes->get('blog', 'BlogController::index');

$routes->get('blog/create', 'BlogController::create');
$routes->post('blog/store', 'BlogController::store');

$routes->get('blog/edit/(:num)', 'BlogController::edit/$1');
$routes->post('blog/update/(:num)', 'BlogController::update/$1');
