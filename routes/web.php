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

Route::get('/', function () {
    return redirect('/index');
});

Auth::routes();
Route::get('logout', 'QovexController@logout');

Route::get('pages-login', 'QovexController@index');
//Route::get('pages-login-2', 'QovexController@index');
Route::get('pages-register', 'QovexController@index');
Route::get('pages-register-2', 'QovexController@index');
Route::get('pages-recoverpw', 'QovexController@index');
Route::get('pages-recoverpw-2', 'QovexController@index');
Route::get('pages-lock-screen', 'QovexController@index');
Route::get('pages-lock-screen-2', 'QovexController@index');
Route::get('pages-404', 'QovexController@index');
Route::get('pages-500', 'QovexController@index');
Route::get('pages-maintenance', 'QovexController@index');
Route::get('pages-comingsoon', 'QovexController@index');
Route::post('login-status', 'QovexController@checkStatus');
//Route::get('login', 'QovexController@logout');
Route::resource('lycees','LyceeController');
Route::resource('collegestech','CollegetechController');
Route::resource('pilotes','PiloteController');
Route::resource('piloteslycee','PiloteLcController'); 

Route::resource('colleges','CollegeController');
Route::get('/create_college', 'CollegeController@create')->name('create_college');
Route::get('/create_pilote', 'PiloteController@create')->name('create_pilote');
Route::get('/create_pilote_lycee', 'PiloteLcController@create')->name('create_pilote_lycee');


Route::get('/edit/{id}', 'CollegeController@edit')->name('editcollege');
Route::get('/edit_lycee/{id}', 'LyceeController@edit')->name('editlycee');

Route::get('/saisie_classe_lycee', 'LyceeController@saisie');

//Route::resource('besoin','QovexController@indexbesoin')->name('besoin');
Route::get('/Gestion_Besoin', 'QovexController@indexbesoin')->name('besoin');
//Route::post('/login', 'QovexController@logout')->name('logout');
// You can also use auth middleware to prevent unauthenticated users
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('{any}', 'QovexController@index');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');