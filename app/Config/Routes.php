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
$routes->get('/', 'Home::index', ['filter' => 'noauth']);
$routes->match(['get','post'],'/admin/login', 'Users::index', ['filter' => 'noauth']);
$routes->get('logout', 'Users::logout');
$routes->match(['get','post'],'register', 'Users::register', ['filter' => 'noauth']);
$routes->match(['get','post'],'profile', 'Users::profile',['filter' => 'auth']);
$routes->get('dashboard', 'Admin/Dashboard::index',['filter' => 'auth']);


$routes->group('', ['filter' => 'auth'], function($routes) {
    $routes->get('/admin/destinasi', 'Admin/Destinasi::index');
    $routes->get('/admin/destinasi/showData', 'Admin/Destinasi::showData');
    $routes->post('/admin/destinasi/edit', 'Admin/Destinasi::edit');
    $routes->post('/admin/destinasi/delete', 'Admin/Destinasi::delete');
    $routes->post('/admin/destinasi/saveData', 'Admin/Destinasi::saveData');
});
$routes->group('', ['filter' => 'auth'], function($routes) {
    $routes->get('/admin/durasi', 'Admin/Durasi::index');
    $routes->get('/admin/durasi/showData', 'Admin/Durasi::showData');
    $routes->post('/admin/durasi/edit', 'Admin/Durasi::edit');
    $routes->post('/admin/durasi/delete', 'Admin/Durasi::delete');
    $routes->post('/admin/durasi/saveData', 'Admin/Durasi::saveData');
});
$routes->group('', ['filter' => 'auth'], function($routes) {
    $routes->get('/admin/kategori', 'Admin/Kategori::index');
    $routes->get('/admin/kategori/showData', 'Admin/Kategori::showData');
    $routes->post('/admin/kategori/edit', 'Admin/Kategori::edit');
    $routes->post('/admin/kategori/delete', 'Admin/Kategori::delete');
    $routes->post('/admin/kategori/saveData', 'Admin/Kategori::saveData');
});
$routes->group('', ['filter' => 'auth'], function($routes) {
    $routes->get('/admin/paket_tour', 'Admin/Paket_tour::index');
    $routes->get('/admin/paket_tour/list_paket', 'Admin/Paket_tour::list_paket');
    $routes->get('/admin/paket_tour/showDataTour', 'Admin/Paket_tour::showDataTour');
    $routes->get('/admin/paket_tour/editTour', 'Admin/Paket_tour::editTour');
    $routes->get('/admin/paket_tour/tambahInput', 'Admin/Paket_tour::tambahInput');
    $routes->post('/admin/paket_tour/saveEditPaket', 'Admin/Paket_tour::saveEditPaket');
    $routes->post('/admin/paket_tour/delete', 'Admin/Paket_tour::delete');
    $routes->post('/admin/paket_tour/saveDataPaket', 'Admin/Paket_tour::saveDataPaket');
});
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
