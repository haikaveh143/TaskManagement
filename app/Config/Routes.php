<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Pages::index');
$routes->get('/tasks', 'Tasks::index');
$routes->get('/profile', 'Pages::profile');
$routes->get('/about', 'Pages::about');

$routes->get('login', 'Auth::login');
$routes->post('login', 'Auth::login');
$routes->get('logout', 'Auth::logout');

$routes->get('tasks/new', 'Tasks::newTask');
$routes->post('tasks/create', 'Tasks::create');

$routes->get('tasks/edit/(:num)', 'Tasks::edit/$1');
$routes->post('tasks/update/(:num)', 'Tasks::update/$1');

$routes->get('tasks/delete/(:num)', 'Tasks::delete/$1');
$routes->post('tasks/delete/(:num)', 'Tasks::delete/$1');


$routes->post('tasks/archive/(:num)', 'Tasks::archive/$1');


$routes->get('tasks/archived', 'Tasks::archived');

$routes->post('tasks/restore/(:num)', 'Tasks::restore/$1');

