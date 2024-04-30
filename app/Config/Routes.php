<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
/**
 * $routes->get('/articles', 'Articles::index');
* $routes->get('/articles/(:num)', 'Articles::show/$1');
* $routes->get('/articles/new', 'Articles::new', ["as"=>"new_article"]);

* //$routes->post('/articles/create/','Articles::create'); //reftful update
* $routes->post('/articles/','Articles::create');

* //$routes->get('/articles/edit/(:num)', 'Articles::edit/$1'); //reftful update
* $routes->get('/articles/(:num)/edit/', 'Articles::edit/$1');

* //$routes->post('/articles/update/(:num)','Articles::update/$1'); //restful update
* $routes->patch('/articles/(:num)','Articles::update/$1');

* //$routes->get('articles/delete/(:num)', 'Articles::delete/$1');
* //$routes->post('articles/delete/(:num)', 'Articles::delete/$1');
* //$routes->match(["get","delete"],'articles/delete/(:num)', 'Articles::delete/$1');
* $routes->get('articles/(:num)/delete', 'Articles::confirmDelete/$1');
* $routes->delete("/articles/(:num)", 'Articles::delete/$1');
 */
service('auth')->routes($routes);

$routes->group("",["filter"=>"login"], static function ($routes){

    $routes->resource("articles",["placeholder"=>"(:num)"]);
    $routes->get('articles/(:num)/delete', 'Articles::confirmDelete/$1');
    $routes->get('articles/(:num)/image/edit','Article\Image::new/$1');
    $routes->post('articles/(:num)/image/create','Article\image::create/$1');
    $routes->get('articles/(:num)/image/get', 'Article\image::get/$1');
    $routes->post('articles/(:num)/image/delete', 'Article\image::delete/$1');


    $routes->get("set-password","Password::set");
    $routes->post("set-password","Password::update");
});
