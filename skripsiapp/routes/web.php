<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', 'HomeController@index');

//brnads
Route::get('/brand', 'BrandController@brand');
Route::post('/brand', 'BrandController@store');
Route::get('/brand/create', 'BrandController@create');
Route::get('/brand/{slug}', 'BrandController@show');
Route::get('/brand/{id_brand}/edit', 'BrandController@edit');
Route::put('/brand/{id_brand}', 'BrandController@update');
Route::delete('/brand/{id_brand}', 'BrandController@destroy');

//produk
Route::get('/produk', 'ProdukController@produk');
Route::post('/produk', 'ProdukController@store');
Route::get('/produk/create', 'ProdukController@create');
Route::get('/produk/{slug}', 'ProdukController@show');
Route::get('/produk/{id_produk}/edit', 'ProdukController@edit');
Route::put('/produk/{id_produk}', 'ProdukController@update');
Route::delete('/produk/{id_produk}', 'ProdukController@destroy');

//briefs
Route::get('/brief', 'BriefController@brief');
Route::post('/brief', 'BriefController@store');
Route::get('/brief/create', 'BriefController@create');
Route::get('/brief/{slug}', 'BriefController@show');
Route::get('/brief/{id_brief}/edit', 'BriefController@edit');
Route::put('/brief/{id_brief}', 'BriefController@update');
Route::delete('/bruef{id_brief}', 'BriefController@destroy');

//packaging
Route::get('/packaging', 'PackagingController@packaging');
Route::post('/packaging', 'PackagingController@store');
Route::get('/packaging/create', 'PackagingController@create');
Route::get('/packaging/{slug}', 'PackagingController@show');
Route::get('/packaging/{id_packaging}/edit', 'PackagingController@edit');
Route::put('/packaging/{id_packaging}', 'PackagingController@update');


Route::get('/master', function(){
    return view('layout.master');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


