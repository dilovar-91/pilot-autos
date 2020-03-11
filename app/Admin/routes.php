<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->resource('cars', CarController::class);
    $router->resource('complectations', ComplectationController::class);
    $router->resource('brands', BrandController::class);
    $router->resource('sites', SiteController::class);
    $router->resource('competitors', CompetitorController::class);
    $router->resource('car-models', ModelController::class);



    $router->get('/api/types', 'CarController@getType')->name('api.types');
    $router->get('/api/cars', 'CarController@getCar')->name('api.cars');

});
