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
Route::put('edit-route/{id}', [RouteController::class, 'putCountry'])->name('put_route');
Route::post('create-route', [RouteController::class, 'postCreate'])->name('post_create_route');

Route::get('list-cities/{id}', [RouteController::class, 'jsonCountry']);


