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
    Route::get('/home/{id}', ['as' => 'admin.home', 'uses' => 'Admin\AdminController@home']);

    # Save reorder
    Route::post('reorderSave/{tableName}', 'Admin\UtilitiesAdminController@reorderSave');

    Route::get('/home-gallery', ['as' => 'admin.home-gallery', 'uses' => 'Admin\AdminController@homeGallery']);
    Route::get('/home-gallery-add', ['as' => 'admin.home-gallery-add', 'uses' => 'Admin\AdminController@homeGalleryAdd']);
    Route::delete('/home-gallery-delete', ['as' => 'admin.home-gallery-delete', 'uses' => 'Admin\AdminController@homeGalleryDelete']);

    Route::post('/home-gallery-add', ['as' => 'admin.home-gallery-add', 'uses' => 'Admin\AdminController@homeGalleryAddStore']);

    Route::patch('home-update/{id}', ['as' => 'admin.home.update', 'uses' => 'Admin\AdminController@homeUpdate']);
});


