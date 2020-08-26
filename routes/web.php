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

//Route::get('/', [HomeController::class, 'uses' => 'HomeController@index'])->name('home');
Route::get('/', [CarController::class, 'uses' => 'CarController@carPrices'])->name('carPrices');
Route::get('/sites', [CarController::class, 'uses' => 'CarController@sites'])->name('sites');
Route::get('/car-prices', [CarController::class, 'uses' => 'CarController@carPrices'])->name('carPrices');
Route::get('/brands', [CarController::class, 'uses' => 'CarController@brands'])->name('cabrandsrs');
Route::get('/competitors', [CarController::class, 'uses' => 'CarController@competitors'])->name('competitors');
Route::get('/landings', [CarController::class, 'uses' => 'CarController@landings'])->name('landings');
Route::get('/competitor_site', [CarController::class, 'uses' => 'CarController@competitor_site'])->name('competitor_site');
Route::get('/competitor_landing', [CarController::class, 'uses' => 'CarController@competitor_landing'])->name('competitor_landing');
Route::get('/brand/{id}', [CarController::class, 'uses' => 'CarController@brandDetail'])->name('brandDetail');
Route::get('/model/{id}', [CarController::class, 'uses' => 'CarController@modelDetail'])->name('modelDetail');
Route::get('/detail/{id}', [CarController::class, 'uses' => 'CarController@getComplectations'])->name('getComplectations');

Auth::routes(['register' => false]);

Route::get('/home', [CarController::class, 'uses' => 'HomeController@index'])->name('home');
Route::get('/logout', [HomeController::class, 'uses' => 'HomeController@logout'])->name('logout');

Route::get('test', function () {
    echo "role";
})->middleware('check_user_role:' . \App\Role\UserRole::ROLE_SUPPORT);
