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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/','TestController@welcome');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products/{id}', 'ProductController@show');

Route::post('/cart', 'CartDetailController@store');
Route::delete('/cart', 'CartDetailController@destroy');

Route::post('/order', 'CartController@update');


Route::middleware(['auth','admin'])->prefix('admin')->namespace('Admin')->group(function (){
    Route::get('/products', 'ProductController@index'); //listado | sin namespace 'Admin\ProductController@index'
    Route::get('/products/create', 'ProductController@create'); //formulario
    Route::post('/products/', 'ProductController@store'); //registrar
    Route::get('/products/{id}/edit', 'ProductController@edit'); //formulario edicion
    Route::post('/products/{id}/edit', 'ProductController@update'); //actualizar
    Route::delete('/products/{id}', 'ProductController@destroy'); //antes get

    Route::get('/products/{id}/images', 'ImageController@index'); //listado
    Route::post('/products/{id}/images', 'ImageController@store');
    Route::delete('/products/{id}/images', 'ImageController@destroy');

    Route::get('/products/{id}/images/select/{image}', 'ImageController@select'); //destacar
});


/*
Route::middleware(['auth','admin'])->group(function (){
    Route::get('/admin/products', 'ProductController@index'); //listado
    Route::get('/admin/products/create', 'ProductController@create'); //formulario
    Route::post('/admin/products/', 'ProductController@store'); //registrar
    Route::get('/admin/products/{id}/edit', 'ProductController@edit'); //formulario edicion
    Route::post('/admin/products/{id}/edit', 'ProductController@update'); //actualizar
    //Route::post('/admin/products/{id}/delete', 'ProductController@destroy'); //antes get
    Route::delete('/admin/products/{id}', 'ProductController@destroy'); //antes get
});

o mejor:
 */
//CR
//UD
