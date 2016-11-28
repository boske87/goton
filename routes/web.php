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
    Route::patch('home-update/{id}', ['as' => 'admin.home.update', 'uses' => 'Admin\AdminController@homeUpdate']);

    # Save reorder
    Route::post('reorderSave/{tableName}', 'Admin\UtilitiesAdminController@reorderSave');

    Route::get('/home-gallery', ['as' => 'admin.home-gallery', 'uses' => 'Admin\AdminController@homeGallery']);
    Route::post('/home-gallery-add', ['as' => 'admin.home-gallery-add', 'uses' => 'Admin\AdminController@homeGalleryAddStore']);
    Route::get('/home-gallery-add', ['as' => 'admin.home-gallery-add', 'uses' => 'Admin\AdminController@homeGalleryAdd']);
    Route::delete('/home-gallery-delete/{id}', ['as' => 'admin.home-gallery-delete', 'uses' => 'Admin\AdminController@homeGalleryDelete']);


    //basic
    Route::get('/basic/{id}', ['as' => 'admin.basic', 'uses' => 'Admin\BasicController@index']);
    Route::patch('basic-update/{id}', ['as' => 'admin.basic.update', 'uses' => 'Admin\BasicController@basicUpdate']);

    Route::get('/basic-gallery', ['as' => 'admin.basic-gallery', 'uses' => 'Admin\BasicController@basicGallery']);
    Route::post('/basic-gallery-add', ['as' => 'admin.basic-gallery-add', 'uses' => 'Admin\BasicController@basicGalleryAddStore']);
    Route::get('/basic-gallery-add', ['as' => 'admin.basic-gallery-add', 'uses' => 'Admin\BasicController@basicGalleryAdd']);
    Route::delete('/basic-gallery-delete/{id}', ['as' => 'admin.basic-gallery-delete', 'uses' => 'Admin\BasicController@basicGalleryDelete']);


    //advance
    Route::get('/advance/{id}', ['as' => 'admin.advance', 'uses' => 'Admin\AdvanceController@index']);
    Route::patch('advance-update/{id}', ['as' => 'admin.advance.update', 'uses' => 'Admin\AdvanceController@advanceUpdate']);

    Route::get('/advance-gallery', ['as' => 'admin.advance-gallery', 'uses' => 'Admin\AdvanceController@advanceGallery']);
    Route::post('/advance-gallery-add', ['as' => 'admin.advance-gallery-add', 'uses' => 'Admin\AdvanceController@advanceGalleryAddStore']);
    Route::get('/advance-gallery-add', ['as' => 'admin.advance-gallery-add', 'uses' => 'Admin\AdvanceController@advanceGalleryAdd']);
    Route::delete('/advance-gallery-delete/{id}', ['as' => 'admin.advance-gallery-delete', 'uses' => 'Admin\AdvanceController@advanceGalleryDelete']);

    //prof

    Route::get('/prof', ['as' => 'admin.prof', 'uses' => 'Admin\ProfController@index']);
    Route::get('/prof/add', ['as' => 'admin.prof.add', 'uses' => 'Admin\ProfController@add']);

    Route::post('/prof/add', ['as' => 'admin.prof.add', 'uses' => 'Admin\ProfController@store']);
    Route::delete('/prof/delete/{id}', ['as' => 'admin.prof.delete', 'uses' => 'Admin\ProfController@delete']);
    Route::get('/prof/edit/{id}', ['as' => 'admin.prof.edit', 'uses' => 'Admin\ProfController@edit']);
    Route::patch('prof/update/{id}', ['as' => 'admin.prof.update', 'uses' => 'Admin\ProfController@update']);

    Route::get('/prof/view/{id}', ['as' => 'admin.prof.view', 'uses' => 'Admin\ProfController@view']);

    Route::get('/prof/gallery/add/{id}', ['as' => 'admin.prof.gallery.add', 'uses' => 'Admin\ProfController@galleryAdd']);
    Route::post('/prof/gallery/add', ['as' => 'admin.prof.gallery.add', 'uses' => 'Admin\ProfController@galleryStore']);

    Route::delete('/prof/gallery/delete/{id}', ['as' => 'admin.prof.gallery.delete', 'uses' => 'Admin\ProfController@deleteImageGallery']);


    //news
    Route::get('/news', ['as' => 'admin.news', 'uses' => 'Admin\NewsController@index']);

    Route::get('/news/add', ['as' => 'admin.news.add', 'uses' => 'Admin\NewsController@add']);
    Route::post('/news/add', ['as' => 'admin.news.add', 'uses' => 'Admin\NewsController@store']);
    Route::delete('/news/delete/{id}', ['as' => 'admin.news.delete', 'uses' => 'Admin\NewsController@delete']);




});


