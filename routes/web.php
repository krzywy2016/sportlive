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
    return view('welcome');
});

Route::get('adminlogin', function () {
    return view('adminlogin');
});

Route::get('adminpanel', function () {
    return view('adminindex');
});

Route::get('addrelation', function () {
    return view('adminaddrelation');
});

Route::get('myrelation', function () {
    return view('adminmyrelation');
});

Route::get('archiverelation', function () {
    return view('adminarchiverelation');
});

