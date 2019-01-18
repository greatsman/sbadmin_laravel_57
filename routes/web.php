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
    return view('admin.index');
});

Route::get('/404', function () {
    return view('admin.404');
});

Route::get('/blank', function () {
    return view('admin.blank');
});

Route::get('/login', function () {
    return view('admin.login.login');
});

Route::get('/register', function () {
    return view('admin.login.register');
});

Route::get('/forgot-password', function () {
    return view('admin.login.forgot');
});

// Route::get('/admin', function () {
//     return view('admin/index');
// });
