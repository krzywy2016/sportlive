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

/* ----- SYSTEM LOGOWANIA I WYLOGOWYWANIA UŻYTKOWNIKÓW ----- */
Route::auth();
Route::get('/dashboard', 'HomeController@index')->middleware('checkAction');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
/* ----- KONIEC SYSTEMU LOGOWANIA I WYLOGOWYWANIA UŻYTKOWNIKÓW ----- */

Route::get('addrelation', function () {
    return view('adminaddrelation');
})->middleware('checkAction');

Route::get('myrelation', function () {
    return view('adminmyrelation');
})->middleware('checkAction');

Route::get('archiverelation', function () {
    return view('adminarchiverelation');
})->middleware('checkAction');

/* ----- ZARZĄDZANIE UŻYTKOWNIKAMI ----- */
Route::get('users/show', 'UserController@index')->name('users.show')->middleware('checkAction'); //widok tylka dla admina
/* ----- KONIEC ZARZĄDZANIA UŻYTKOWNIKAMI ----- */

Route::get('relation/add', 'RelationsController@store')->name('relation.store')->middleware('checkAction'); //widok tylka dla admina

