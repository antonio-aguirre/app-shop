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

Route::get('/','TestController@welcome'); //se dirige al controlador y busca la función welcome y ejecuta lo que esté dentro

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/products', 'ProductController@index'); //listado de productos (el usuario accede al listado de los productos)
Route::get('/admin/products/create', 'ProductController@create'); //creación de productos (devolverá un formulario)
Route::post('/admin/products', 'ProductController@store'); // creación de productos (creara los productos cuando el usuario presione el botón de registro de productos)
