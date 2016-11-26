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

Auth::routes();

Route::post('/login', ['as' => '/login', 'uses' => 'Admin\AuthController@authenticate']);

Route::group(['prefix' => 'admin', 'middleware' => ['auth'] ], function () {

    Route::get('/', 'Admin\AdminController@index');
    Route::get('/home/{id}', 'Admin\AdminController@home');

    Route::patch('edit-home/{id}', ['as' => 'admin.home.update', 'uses' => 'Admin\AdminController@homeUpdate']);
});


