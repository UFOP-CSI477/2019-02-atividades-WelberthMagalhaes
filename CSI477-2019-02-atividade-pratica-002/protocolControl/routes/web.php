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

// Retorna página Principal
Route::get('/','PaginaController@index')->name('initial');

// Retorna index de subject(tipos de protocolos) apresentados em ordem ascendente
//Route::get('/area_geral', 'SubjectController@index');

Route::resource('/subjects', 'SubjectController');
Route::get('/loginIndex', 'PaginaController@loginIndex')->name('login');
Route::post('/authenticate',  'PaginaController@authenticate');
Route::get('/create_users','UserController@create')->name('create_users');
Route::post('/store_users','UserController@store')->name('store_users');

Route::group(['middleware'=>['auth']], function()
{
  Route::get('/logout', function()
  { Auth::logout();
    return redirect()->route('initial');
  });

  Route::resource('/users','UserController');
  Route::get('/users_area','User_areaController@index')->name('users_area');
  Route::get('/users_area','User_areaController@index')->name('admins_area');

});
