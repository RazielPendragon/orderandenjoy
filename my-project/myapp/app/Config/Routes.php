<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('LoginLogOutController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'LoginLogOutController::index');

// Ejemplo base

$routes->get('base-lista', 'NavegarBaseController::index');
$routes->get('base-ver', 'NavegarBaseController::ver');
$routes->get('base-editar', 'NavegarBaseController::editar01Formulario');
$routes->get('base-editar-continuar', 'NavegarBaseController::editar02Continuar');
$routes->get('base-eliminar', 'NavegarBaseController::eliminar');
$routes->post('base-elimnar-continuar', 'NavegarBaseController::eliminar02Continuar');


// CRUD
//
//
$routes->get('menu-lista', 'MenuCrud::index');
//
$routes->get('menu-ver/(:num)', 'MenuCrud::ver/$1');
//
$routes->get('menu-agregar', 'MenuCrud::agregar01Formulario');
$routes->post('menu-agregar-continuar', 'MenuCrud::agregar02Continuar');
//
$routes->add('menu-editar/(:num)', 'MenuCrud::editar01Formulario/$1');
$routes->post('menu-editar-continuar', 'MenuCrud::editar02Continuar');
//
$routes->get('menu-eliminar/(:num)', 'MenuCrud::eliminar01Formulario/$1');
$routes->post('menu-elimnar-continuar', 'MenuCrud::eliminar02Continuar');
//
$routes->add('menu-cancelar', 'MenuCrud::cancelar');
//

// DEMO LOGIN
//
$routes->add('login', 'LoginLogOutController::index');
$routes->add('login-login', 'LoginLogOutController::login01Formulario');
$routes->add('login-login01Validar/(:num)', 'LoginLogOutController::login02Validar/$1');
$routes->add('login-logout', 'LoginLogOutController::logout');
//
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}