<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('list-routes', [RouteController::class, 'index'])->name('get_list_route');
Route::get('form-register-routes', [RouteController::class, 'formCreate'])->name('get_register_route');
Route::get('form-edit-routes/{id}', [RouteController::class, 'formEdit'])->name('get_edit_route');
Route::put('edit-route/{id}', [RouteController::class, 'putRoute'])->name('put_route');
Route::post('create-route', [RouteController::class, 'postCreate'])->name('post_create_route');

Route::get('list-cities/{id}', [RouteController::class, 'jsonCountry']);

Route::get('list-clients', [ClientController::class, 'index'])->name('get_list_client');
Route::get('form-register-clients', [ClientController::class, 'formCreate'])->name('get_register_client');
Route::get('form-edit-clients/{id}', [ClientController::class, 'formEdit'])->name('get_edit_client');
Route::put('edit-client/{id}', [ClientController::class, 'putEditClient'])->name('put_client');
Route::post('create-client', [ClientController::class, 'postCreate'])->name('post_create_client');

Route::get('list-cities-route/{id}', [ClientController::class, 'jsonCountryRoute']);
Route::get('view-location-map/{id}', [ClientController::class, 'viewMap'])->name('get_location_map');
