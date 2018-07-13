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
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/category', function () {
    return view('category');
});
Route::get('/single', function () {
    return view('single');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/generic', function () {
    return view('generic');
});
Route::get('/elements', function () {
    return view('elements');
});
Route::get('/confermation', function () {
    return view('confermation');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/mail', function () {
    return view('mail');
});
Route::get('/tracking', function () {
    return view('tracking');
});
