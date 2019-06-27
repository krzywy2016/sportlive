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
Route::get('/', 'PageController@index')->name('index.show');

Route::get('/relation/{id}/show', 'RelationsController@show')->name('relation.show');

/* ----- SYSTEM LOGOWANIA I WYLOGOWYWANIA UŻYTKOWNIKÓW ----- */
Route::auth();
Route::get('/dashboard', 'HomeController@index')->middleware('checkAction');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
// ----- KONIEC SYSTEMU LOGOWANIA I WYLOGOWYWANIA UŻYTKOWNIKÓW ----- 

/* ----- SPIS AKTUALNYCH RELACJI DANEGO UŻYTKOWNIKA ----- */
Route::get('/myrelation','RelationsController@myrelation')->name('myrelation.show')->middleware('checkAction');
// ----- KONIEC ----- 

/* ----- ZARZĄDZANIE UŻYTKOWNIKAMI ----- */
Route::get('users/show', 'UserController@index')->name('users.show')->middleware('checkAction'); //widok tylka dla admina
// ----- KONIEC ZARZĄDZANIA UŻYTKOWNIKAMI  -----

Route::get('addrelation', function () {
    return view('adminaddrelation');
})->middleware('checkAction');

Route::get('archiverelation', function () {
    return view('adminarchiverelation');
})->middleware('checkAction');



Route::post('relation/add', 'RelationsController@store')->name('relation.store')->middleware('checkAction'); //widok tylka dla admina
Route::get('relation/edit/{id}/show', 'RelationsController@edit')->name('relation.edit')->middleware('checkAction'); //widok tylka dla admina

Route::post('/relation/addpost','RelationsController@addpost');
Route::post('/relation/editstatus','RelationsController@editstatus');
Route::post('/relation/addchatpost','RelationsController@chatpost');


Route::get('teams/show', 'TeamController@index')->name('team.show')->middleware('checkAction');

Route::get('/searchhometeam','RelationsController@searchhometeam');
Route::get('/searchawayteam','RelationsController@searchawayteam');