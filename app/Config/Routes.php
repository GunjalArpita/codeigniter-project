<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
//$routes->get('admin/dashboard', 'AdminController::dashboard');

// //admin
$routes->get('admin', 'AdminController::index'); // Show All Admins
$routes->get('admin/create', 'AdminController::create');
$routes->post('admin/store', 'AdminController::store');
$routes->get('admin/edit/(:num)', 'AdminController::edit/$1');
$routes->post('admin/update/(:num)', 'AdminController::update/$1');
$routes->get('admin/delete/(:num)', 'AdminController::delete/$1');


//artist
$routes->get('artist', 'ArtistController::index');
$routes->get('artist/create', 'ArtistController::create');
$routes->post('artist/store', 'ArtistController::store');
$routes->get('artist/edit/(:num)', 'ArtistController::edit/$1');
$routes->post('artist/update/(:num)', 'ArtistController::update/$1');
$routes->get('artist/delete/(:num)', 'ArtistController::delete/$1');


//art type
$routes->get('arttype', 'ArttypeController::index');
$routes->get('arttype/create', 'ArttypeController::create');
$routes->post('arttype/store', 'ArttypeController::store');
$routes->get('arttype/edit/(:num)', 'ArttypeController::edit/$1');
$routes->post('arttype/update/(:num)', 'ArttypeController::update/$1');
$routes->get('arttype/delete/(:num)', 'ArttypeController::delete/$1');


//artist art-type
$routes->get('/artistarttype', 'ArtistarttypeController::index');
$routes->get('/artistarttype/create', 'ArtistarttypeController::create');
$routes->post('/artistarttype/store', 'ArtistarttypeController::store');
$routes->get('/artistarttype/delete/(:num)/(:num)', 'ArtistarttypeController::delete/$1/$2');


//art product
$routes->get('artproduct', 'ArtproductController::index');
$routes->get('artproduct/create', 'ArtproductController::create');
$routes->post('artproduct/store', 'ArtproductController::store');
$routes->get('artproduct/edit/(:num)', 'ArtproductController::edit/$1');
$routes->post('artproduct/update/(:num)', 'ArtproductController::update/$1');
$routes->get('artproduct/delete/(:num)', 'ArtproductController::delete/$1');


//artist art-product
$routes->get('/artistartproduct', 'ArtistartproductController::index');
$routes->get('/artistartproduct/create', 'ArtistartproductController::create');
$routes->post('/artistartproduct/store', 'ArtistartproductController::store');
$routes->get('/artistartproduct/delete/(:num)/(:num)', 'ArtistartproductController::delete/$1/$2');


//artmedium
$routes->get('/artmedium', 'ArtmediumController::index');
$routes->get('/artmedium/create', 'ArtmediumController::create');
$routes->post('/artmedium/store', 'ArtmediumController::store');
$routes->get('/artmedium/edit/(:num)', 'ArtmediumController::edit/$1');
$routes->post('/artmedium/update/(:num)', 'ArtmediumController::update/$1');
$routes->get('/artmedium/delete/(:num)', 'ArtmediumController::delete/$1');


//artist art-medium
$routes->get('/artistartmedium', 'ArtistartmediumController::index');
$routes->get('/artistartmedium/create', 'ArtistartmediumController::create');
$routes->post('/artistartmedium/store', 'ArtistartmediumController::store');
$routes->get('/artistartmedium/delete/(:num)/(:num)', 'ArtistartmediumController::delete/$1/$2');



// etc.

// $routes->get('admin/login', function () {
//     return view('admin/login'); // Show login page
// });

// $routes->post('admin/login', 'AdminController::login'); // Handle login form submission

// $routes->get('admin', function () {
//     return "Welcome to Admin Dashboard"; // Temporary Admin Dashboard
// });





$routes->get('/', function () {
    return view('welcome_message'); // Default page
});

// Admin Routes
$routes->get('admin/login', 'AdminController::loginForm'); // Admin login page
$routes->post('admin/login', 'AdminController::login'); // Handle login
$routes->get('admin', 'AdminController::dashboard'); // Admin dashboard


// // Artist Routes
// $routes->get('artist/login', 'ArtistController::login'); // Show login form
// $routes->post('artist/login', 'ArtistController::authenticate'); // Handle login
// $routes->get('artist/dashboard', 'ArtistController::dashboard'); // Artist Dashboard
// $routes->get('artist/logout', 'ArtistController::logout'); // Logout

$routes->get('/artist/login', 'ArtistController::login');        // Show login page
$routes->post('/artist/authenticate', 'ArtistController::authenticate');  // Handle login
$routes->get('/artist/dashboard', 'ArtistController::dashboard');  // Artist Dashboard (Protected)
$routes->get('/artist/logout', 'ArtistController::logout');       // Logout Artist




$routes->get('artist/create', 'ArtistController::create');
$routes->post('artist/store', 'ArtistController::store');
$routes->get('artist/view', 'ArtistController::view');

$routes->get('admin', 'AdminController::index');
$routes->get('admin/artist', 'ArtistController::index');
$routes->get('admin/artproduct', 'ArtProductController::index');
$routes->get('admin/arttype', 'ArtTypeController::index');
$routes->get('admin/artmedium', 'ArtMediumController::index');

$routes->get('arttype/view', 'ArttypeController::view');
$routes->get('artmedium/view', 'ArtmediumController::view');
$routes->get('artproduct/view', 'ArtproductController::view');

?>

