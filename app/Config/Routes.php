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
$routes->get('/', 'Home::index');
$routes->get('/pages/(:any)', 'Home::pages/$1');
$routes->get('/about-us', 'Home::aboutus');
$routes->get('/contact-us', 'Home::contactus');
$routes->get('/home/ContactusSubmit', 'Home::ContactusSubmit');
$routes->get('/report-abuse', 'Home::reportabuse'); 
$routes->get('/submit-apk', 'Home::submitapk'); 

$routes->get('/games', 'Home::games'); 
$routes->get('/apps', 'Home::apps'); 


$routes->get('/discover-topics', 'Home::discovertopics'); 
$routes->get('/editors-choice-topics', 'Home::editorschoicetopics'); 
$routes->get('/pre-register', 'Home::preregister');
$routes->get('/game-sales', 'Home::gamesales');
$routes->get('/more-topics', 'Home::moretopics');
$routes->get('/topic/(:any)', 'Home::topic/$1'); 
$routes->get('/admin', 'Admin::login'); 
$routes->get('/admin/dashborad', 'Admin::dashborad'); 
$routes->get('/admin/login', 'Admin::login'); 
$routes->get('/admin/logout', 'Admin::logout'); 
$routes->get('/admin/add_Product', 'Admin::add_product');
$routes->get('/admin/addProductdata', 'Admin::addProductdata');
$routes->get('/admin/editproduct', 'Admin::editProduct');
$routes->add('/admin/deleteproduct/(:num)', 'Admin::deleteProduct/$1');
$routes->get('/admin/editcategory', 'Admin::edit_category');
$routes->get('/admin/product', 'Admin::product');
$routes->add('/admin/deletecategory/(:num)', 'Admin::deletecategory/$1');
$routes->get('/product/(:num)', 'Admin::products');
$routes->get('/admin/editproduct/(:num)/deletescreenshot/(:num)', 'Admin::deletescreenshot/$1/$2');
$routes->get('/admin/categories', 'Admin::categories');
$routes->get('/admin/addcategories', 'Admin::addCategories');
$routes->get('/admin/api', 'Admin::api');
$routes->get('/admin/dataApi', 'Admin::dataApi');
// $routes->get('/admin/dataApifetch/(:any)', 'Admin::dataApifetch/$1');
$routes->get('/game/(:any)', 'Home::singlegame/$1');
$routes->get('/store/(:any)', 'Home::singlegame/$1');
// $routes->get('/(:any)', 'Home::singlegame/$1');
$routes->get('/games/games-download', 'Home::gamesdownload');
$routes->get('/apps/single-app', 'Home::singleapp');
$routes->get('/apps/app-download', 'Home::appdownload');
$routes->get('/admin/pages', 'Admin::pages');
$routes->get('/admin/addPages', 'Admin::addPages');
$routes->get('/admin/edit_pages', 'Admin::edit_pages');
$routes->add('/admin/deletepages/(:num)', 'Admin::deletepages/$1');
$routes->get('/admin/banner', 'Admin::banner');
$routes->get('/admin/banner_data', 'Admin::bannerdata');
$routes->get('/admin/edit_banner', 'Admin::edit_banner');
$routes->add('/admin/deletebanner/(:num)', 'Admin::deletebanner/$1');
$routes->add('/data', 'Admin::data');
$routes->get('/admin/setting', 'Admin::setting');
$routes->get('/admin/update_setting', 'Admin::update_setting');

$routes->get('/admin/collection', 'Admin::collection');
$routes->get('/admin/addcollection', 'Admin::addCollection');
$routes->get('/admin/collection_data', 'Admin::collectiondata');
$routes->get('/admin/edit_collection', 'Admin::edit_collection');
$routes->add('/admin/deletecollection/(:num)', 'Admin::deletecollection/$1');

$routes->get('/admin/homepage', 'Admin::homepage');
$routes->get('/admin/addcollection', 'Admin::addCollection');

$routes->get('/category/(:any)', 'Home::category/$1');
$routes->get('/search', 'Home::search');


$routes->get('admin/contact-us', 'Admin::contactus');
$routes->add('/admin/deletecontactus/(:num)', 'Admin::deletecontactus/$1');
$routes->get('/admin/contact-us/(:num)', 'Admin::contactusview/$1');


$routes->get('admin/report-abuse', 'Admin::reportabuse');
$routes->add('/admin/deletereportabuse/(:num)', 'Admin::deletereportabuse/$1');
$routes->get('/admin/report-abuse/(:num)', 'Admin::reportabuseview/$1');

$routes->get('admin/submit-apk', 'Admin::submitapk');
$routes->add('/admin/deletesubmitapk/(:num)', 'Admin::deletesubmitapk/$1');
$routes->get('/admin/submit-apk/(:num)', 'Admin::submitapkview/$1');





// $routes->get('/admin/api_data', 'Admin::api_data');




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
