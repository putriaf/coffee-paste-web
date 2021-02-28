<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultController('Login');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Login::index');
$routes->get('logout', 'Login::logout');
$routes->match(['get', 'post'], 'register', 'Login::register');
$routes->get('home', 'Home::index', ['filter' => 'auth']);
$routes->get('/about', 'Home::about');
$routes->get('/menu', 'Home::menu');
$routes->get('/form', 'Home::form');
$routes->get('/home', 'About::home');
$routes->get('/about', 'About::about');
$routes->get('/menu', 'About::menu');
$routes->get('/form', 'About::form');
$routes->get('/home', 'Menu::home');
$routes->get('/about', 'Menu::about');
$routes->get('/menu', 'Menu::menu');
$routes->get('/form', 'Menu::form');
$routes->get('/home', 'Form::home');
$routes->get('/about', 'Form::about');
$routes->get('/menu', 'Form::menu');
$routes->post('/hasil', 'Form::hasil');
$routes->get('/home', 'Hasil::home');
$routes->get('/view_reservasi', 'Reservasi::index');
$routes->get('/hasil', 'Form::index');

/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
