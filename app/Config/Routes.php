<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('home/algo', 'Home::algo');
$routes->get('informacion/grupo/(:num)/', 'Informacion::grupo');
$routes->post('informacion/comentarios/', 'Informacion::comentarios');
$routes->get('cambia/es', 'Cambia::es');
$routes->get('cambia/en', 'Cambia::en');
$routes->get('admin/inicio', 'Admin::inicio');
$routes->get('admin/grupos/', 'Admin::grupos');
$routes->post('admin/recibeproyectos/', 'Admin::recibeproyectos');
$routes->get('admin/listadogrupos/', 'Admin::listadogrupos');
$routes->get('admin/ediciongrupo/(:any)/(:num)', 'Admin::ediciongrupo');
$routes->get('admin/edicionproyecto/(:any)/(:num)', 'Admin::edicionproyecto');
$routes->get('admin/infogrupo/(:num)', 'Admin::infogrupo');
$routes->get('admin/infoproyecto/(:num)', 'Admin::infoproyecto');
$routes->post('admin/recibegrupo/', 'Admin::recibegrupo');
$routes->post('admin/recibeprograma/', 'Admin::recibeprograma');
$routes->get('admin/fotogrupo/(:num)', 'Admin::fotogrupo');
$routes->get('admin/listadoproyectos/', 'Admin::listadoproyectos');
$routes->get('admin/infoproyecto/(:num)', 'Admin::infoproyecto');
$routes->get('admin/nuevoprograma/', 'Admin::nuevoprograma');
$routes->post('admin/recibeproyectoedit/', 'Admin::recibeproyectoedit');
$routes->get('usuario/login/', 'Usuario::login');
$routes->post('usuario/auth/', 'Usuario::auth');
$routes->get('usuario/logout/', 'Usuario::logout');
$routes->post('admin/uploadimage/', 'Admin::uploadimage');
$routes->get('pascua', 'Pascua::index');
$routes->get('inbal', 'Inbal::index');