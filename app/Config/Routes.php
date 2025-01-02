<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home/regis', 'Home::regis');
$routes->get('/SensorSuhu', 'SensorSuhu::index');
$routes->get('/SensorPh', 'SensorPh::index');
$routes->get('/Schedule', 'Schedule::index');
$routes->get('/home/senData/(:num)/(:num)', 'Pages::senData/$1/$2');
$routes->setAutoRoute(true);
