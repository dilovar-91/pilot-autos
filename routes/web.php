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
Route::get('/model/{id}', [CarController::class, 'uses' => 'CarController@modelDetail'])->name('modelDetail');
Route::get('/detail/{id}', [CarController::class, 'uses' => 'CarController@getComplectations'])->name('getComplectations');

Auth::routes(['register' => false]);

Route::get('/home', [CarController::class, 'uses' => 'CarController@home'])->name('home');
Route::get('/logout', [HomeController::class, 'uses' => 'HomeController@logout'])->name('logout');
