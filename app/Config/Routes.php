<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Pages::index');
$routes->get('/tasks', 'Tasks::index');
$routes->get('/profile', 'Pages::profile');
$routes->get('/about', 'Pages::about');
