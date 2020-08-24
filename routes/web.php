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

Route::middleware(['auth','admin'])->prefix('admin')->group(function(){

    Route::resource('/products', 'ProductController'); //listado de productos (el usuario accede al listado de los productos)
});

//Route::get('/admin/products', 'ProductController@index'); //listado de los productos
//Route::get('/admin/products/create', 'ProductController@create'); //creación de productos (devolverá un formulario)
//Route::post('/admin/products', 'ProductController@store'); // creación de productos (creara los productos cuando el usuario presione el botón de registro de productos)
//Route::get('/admin/products/{id}/edit', 'ProductController@edit'); //formulario de edición
//Route::get('/admin/products/{id}/edit', 'ProductController@update'); //actualizar producto
//Route::delete('/admin/products/{id}','ProductController@destroy'); //eliminar producto

/*
    El método DELETE es como un método POST pero más específico para la función de 
    eliminar, es por esto que al final de la ruta ya NO se especifíca a cual función
    se dirigirá.
*/

//EL método GET solo se utiliza para la obtención de datos. Si se quiere registrar, enviar mail, actualizar
// se utiliza el método POST debido a que es más seguro por que utiliza el toquen csrf