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






Route::get('/', 'ProductController@index');

Route::get('/dodaj-produkt', function () {
    return view('pages.add_product');
});

Route::post('/create', 'ProductController@create');
Route::get('/update/{id}', 'ProductController@update');
Route::post('/edit/{id}', 'ProductController@edit');
Route::get('/delete/{id}', 'ProductController@delete');


