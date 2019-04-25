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

Route::get('/', function () {
    return view('home');
});


// Route::get('/admin', function () {
//     return view('/admin/home');
// });
// Route::get('/pelanggan', function () {
//     return view('/pelanggan/home');
// });


Route::get('/blankadmin', function () {
    return view('/admin/blank');
});
Route::get('/blankpelanggan', function () {
    return view('blank');
});


Route::get('/checkoutadmin', function () {
    return view('/admin/checkout');
});
Route::get('/checkoutpelanggan', function () {
    return view('checkout');
});


Route::get('/productadmin', function () {
    return view('/admin/product');
});
Route::get('/productpelanggam', function () {
    return view('product');
});


Route::get('/storeadmin', function () {
    return view('/admin/store');
});
Route::get('/storepelanggan', function () {
    return view('store');
});

Route::get('/cart', function () {
    return view('cart');
});


Route::get('/login', function () {
    return view('auth.login');
});
Route::resource('pelanggan', 'PelangganController');
Route::resource('admin', 'AdminController');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/admin', 'AdminController@index')->middleware('is_admin');

