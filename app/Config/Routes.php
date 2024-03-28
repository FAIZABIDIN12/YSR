<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');     // Route untuk controller Home
$routes->get('/admin', 'Admin::index'); // Route untuk controller Admin
