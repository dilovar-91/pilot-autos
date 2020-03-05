<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [CarController::class, 'uses' => 'CarController@home'])->name('home');
//Route::get('/home', [CarController::class, 'uses' => 'CarController@home'])->name('home');
Route::get('/brand/{id}', [CarController::class, 'uses' => 'CarController@brandDetail'])->name('brandDetail');
Route::get('/detail/{id}', [CarController::class, 'uses' => 'CarController@getComplectations'])->name('getComplectations');
