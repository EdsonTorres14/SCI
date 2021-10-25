<?php

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

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('login.login');
})->name('index');

/*Route::get('/layoutCapturista', function () {
    return view('layouts.layoutCaptu');
});
Route::get('/layoutAdministrador', function () {
    return view('layouts.layoutAdmin');
});
Route::get('/layoutGestor', function () {
    return view('layouts.layoutGestor');
});*/


Route::get('/layoutAdministrador', 'AdministradorController@index')->name('perfiles.admin')->middleware('auth', 'role:Administrador');
Route::get('/layoutCapturista', 'CapturistaController@perfil')->name('perfiles.capturista')->middleware('auth', 'role:Capturista');
Route::get('/layoutGestor', 'GestorController@perfil')->name('perfiles.gestor')->middleware('auth', 'role:Gestor');

Route::get('/productos/list', 'ProductoController@listProducto')->name('producto.success');
Route::get('/productos/add', 'ProductoController@addProducto')->name('producto.add');
Route::post('/productos/form', 'ProductoController@saveProducto')->name('producto.save');
Route::get('/productos/edit/{idProducto}', 'ProductoController@editProducto')->name('producto.edit');
Route::post('/productos/update/{idProducto}', 'ProductoController@updateProducto')->name('producto.update');
Route::get('/productos/delete/{idProducto}', 'ProductoController@deleteProducto')->name('producto.delete');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');