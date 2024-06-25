<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

Route::group([
    'prefix' => 'api'
], function ($router) {
    // categories
    Route::get('categories',  'CategoriesController@index');
    Route::get('categories/{id}',  'CategoriesController@show');
    // Route::post('categories',  'CategoriesController@create');
    // Route::put('categories/{id}',  'CategoriesController@update');
    // Route::delete('categories/{id}',  'CategoriesController@delete');
    // players
    Route::get('players',  'PlayersController@index');
    Route::get('players/{id}',  'PlayersController@show');
    // Route::post('players',  'PlayersController@create');
    // Route::put('players/{id}',  'PlayersController@update');
    // Route::delete('players/{id}',  'PlayersController@delete');
    // pictures
    Route::get('pictures',  'PicturesController@index');
    Route::get('pictures/{id}',  'PicturesController@show');
    Route::get('pictures/categories/{id}',  'PicturesController@by_categories');
    // Route::post('pictures',  'PicturesController@create');
    // Route::put('pictures/{id}',  'PicturesController@update');
    // Route::delete('pictures/{id}',  'PicturesController@delete');
    // sounds
    Route::get('sounds',  'SoundsController@index');
    Route::get('sounds/{id}',  'SoundsController@show');
    Route::get('sounds/categories/{id}',  'SoundsController@by_categories');
    // Route::post('sounds',  'SoundsController@create');
    // Route::put('sounds/{id}',  'SoundsController@update');
    // Route::delete('sounds/{id}',  'SoundsController@delete');
    // results
    Route::get('results',  'ResultsController@index');
    Route::get('results/{id}',  'ResultsController@show');
    // Route::post('results',  'ResultsController@create');
    // Route::put('results/{id}',  'ResultsController@update');
    // Route::delete('results/{id}',  'ResultsController@delete');
    Route::get('results/mix/{id}',  'ResultsController@mixshow');
    Route::post('results/mix',  'ResultsController@mixcreate');
    Route::get('psjuncts/mix/{id}',  'PsjunctsController@mixshow');
});

// Route::group([
//     'prefix' => 'auth'
// ], function ($router) {
//     Route::post('login', 'AuthController@login');
//     Route::post('logout', 'AuthController@logout');
//     Route::post('refresh', 'AuthController@refresh');
//     Route::post('user-profile', 'AuthController@me');
//     Route::post('register', 'AuthController@register');
// });
