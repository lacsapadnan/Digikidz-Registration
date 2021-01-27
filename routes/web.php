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
    return view('vendor.adminlte.auth.login');
});

// Routing Group Admin
Route::group(['middleware' => ['auth','CheckRole:admin']], function () {
// Routing Kurikulum Digikidz
Route::get('/kurikulum', 'KurikulumController@index');
Route::post('/kurikulum/create', 'KurikulumController@create');
Route::get('/kurikulum/{id}/edit', 'KurikulumController@edit');
Route::post('/kurikulum/{id}/update', 'KurikulumController@update');
Route::get('/kurikulum/{id}/delete', 'KurikulumController@delete');

// Routing User Digikidz
Route::get('/user', 'UserController@index');
Route::post('/user/create', 'UserController@create');
Route::get('/user/{id}/edit', 'UserController@edit');
Route::post('/user/{id}/update', 'UserController@update');
Route::get('/user/{id}/delete', 'UserController@delete'); 
});



// Routing Group Marketing
Route::group(['middleware' => ['auth','CheckRole:marketing']], function () {

// Routing Murid Digikidz
Route::get('/murid', 'MuridController@index');
Route::post('/murid/create', 'MuridController@create');
Route::get('/murid/{id}/edit', 'MuridController@edit');
Route::post('/murid/{id}/update', 'MuridController@update');
Route::get('/murid/{id}/delete', 'MuridController@delete');


// Routing Ortu Digikidz
Route::get('/ortu', 'OrtuController@index');
Route::post('/ortu/create', 'OrtuController@create');
Route::get('/ortu/{id}/edit', 'OrtuController@edit');
Route::post('/ortu/{id}/update', 'OrtuController@update');
Route::get('/ortu/{id}/delete', 'OrtuController@delete');
    
});



// Routing group Bersama
Route::group(['middleware' => ['auth', 'CheckRole:marketing,admin']], function () {
// Routing Murid Digikidz
Route::get('/murid', 'MuridController@index');
Route::post('/murid/create', 'MuridController@create');
Route::get('/murid/{id}/edit', 'MuridController@edit');
Route::post('/murid/{id}/update', 'MuridController@update');
Route::get('/murid/{id}/delete', 'MuridController@delete');


// Routing Ortu Digikidz
Route::get('/ortu', 'OrtuController@index');
Route::post('/ortu/create', 'OrtuController@create');
Route::get('/ortu/{id}/edit', 'OrtuController@edit');
Route::post('/ortu/{id}/update', 'OrtuController@update');
Route::get('/ortu/{id}/delete', 'OrtuController@delete');
});






Auth::routes();


Route::get('/home', 'HomeController@index')->name('dashboard');
