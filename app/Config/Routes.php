<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->add('home/verificarUsuarios', 'Home::verificarUsuarios');
$routes->add('registro', 'Registro::index');
$routes->add('categorias', 'Categorias::index');
$routes->add('productos/categoria/(:num)', 'Productos::categoria/$1');
$routes->add('registro/procesarFormulario', 'Registro::procesarFormulario');
$routes->add('home/', 'Home::index');
$routes->add('productos/detalles/(:num)', 'Productos::detalles/$1');
$routes->add('carrito', 'Carrito::index');
$routes->add('carrito/add', 'Carrito::add');
$routes->add('carrito/eliminarProducto', 'Carrito::eliminarProducto');
$routes->add('compra', 'Compra::index');
$routes->add('compra/verDetalles', 'Compra::verDetalles');
$routes->add('compra/pago', 'Compra::pago');
$routes->add('callumapal', 'Callumapal::index');

$routes->add('formsucess', 'Formsucess::index');
$routes->add('formcancel', 'Formcancel::index');

$routes->add('compra/verCompras', 'Compra::verCompras');

$routes->add('home/destruir', 'Home::destruir');






