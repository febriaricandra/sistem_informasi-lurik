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
//display product
Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");
Route::get('/product', 'App\Http\Controllers\ProductController@index')->name("product.index");
Route::get('/product/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");


//keranjang shopee
Route::get('/cart', 'App\Http\Controllers\CartController@index')->name("cart.index");
Route::post('/cart/add/{id}', 'App\Http\Controllers\CartController@add')->name("cart.add");
Route::get('/cart/delete', 'App\Http\Controllers\CartController@delete')->name("cart.delete");

//form pembelian
Route::get('/confirm-pembelian', 'App\Http\Controllers\FormController@index')->name("form.index");
Route::post('/confirm-pembelian/store', 'App\Http\Controllers\FormController@store')->name("form.store");
Route::get('/download-pdf/', 'App\Http\Controllers\FormController@downloadPDF')->name("form.pdf");

//auth middleware('admin')
Route::middleware('admin')->group(function () {
    Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");
    Route::get('/admin/products', 'App\Http\Controllers\Admin\AdminProductController@index')->name("admin.product.index");
    Route::get('/admin/transaksi/', 'App\Http\Controllers\Admin\AdminTransaksiController@index')->name("admin.transaksi.index");
    Route::post('admin/products/store', 'App\Http\Controllers\Admin\AdminProductController@store')->name("admin.product.store");
    Route::delete('/admin/products/{id}/delete', 'App\Http\Controllers\Admin\AdminProductController@delete')->name("admin.product.delete");
    Route::get('/admin/products/{id}/edit', 'App\Http\Controllers\Admin\AdminProductController@edit')->name("admin.product.edit");
    Route::put('/admin/products/{id}/update', 'App\Http\Controllers\Admin\AdminProductController@update')->name("admin.product.update");
    Route::get('/admin/transaksi', 'App\Http\Controllers\Admin\AdminTransaksiController@index')->name("admin.transaksi.index");
    Route::get('/admin/transaksi/{id}/detail', 'App\Http\Controllers\Admin\AdminTransaksiController@show')->name("admin.transaksi.show");
    Route::delete('/admin/transaksi/{id}/delete', 'App\Http\Controllers\Admin\AdminTransaksiController@delete')->name("admin.transaksi.delete");
});


Auth::routes();
