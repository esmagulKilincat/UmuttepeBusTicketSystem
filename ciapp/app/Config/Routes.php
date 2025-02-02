<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('guzergah', 'Guzergah::index');

$routes->get('admin', 'Admin::index');

$routes->get('admin/otobus', 'Admin::Otobus');
$routes->get('admin/otobus/(:num)', 'AracTanimlari\Otobus::show/$1');
$routes->post('admin/otobus', 'AracTanimlari\Otobus::create');
$routes->delete('admin/otobus/(:num)', 'AracTanimlari\Otobus::delete/$1');