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

/**
 * Route lists for authentication
 */
Route::auth();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/admin', 'HomeController@admin');

/**
 * Route lists for categories
 */
Route::get('/admin/categories', 'CategoryController@index');
Route::get('/admin/categories/create', 'CategoryController@create');
Route::post('/admin/categories', 'CategoryController@createSave');
Route::get('/admin/categories/edit/{id}', 'CategoryController@edit');
Route::post('/admin/categories/edit-save', 'CategoryController@editSave');
Route::get('/admin/categories/destroy/{id}', 'CategoryController@destroy');

/**
 * Route lists for posts
 */
Route::get('/admin/posts', 'PostController@index');
Route::get('/admin/posts/create', 'PostController@create');
Route::post('/admin/posts', 'PostController@createSave');
Route::get('/admin/posts/edit/{id}', 'PostController@edit');
Route::post('/admin/posts/edit-save', 'PostController@editSave');
Route::get('/admin/posts/destroy/{id}', 'PostController@destroy');


/**
 *Route lists for front-end
 */
Route::get('/', 'FrontEndController@index')->name('home');
Route::get('/mobile', 'FrontEndController@mobile')->name('mobile');
Route::get('/kham-pha', 'FrontEndController@kham-pha')->name('kham-pha');
Route::get('/cong-nghe-thong-tin', 'FrontEndController@cong-nghe-thong-tin')->name('cong-nghe-thong-tin');
Route::get('/internet', 'FrontEndController@internet')->name('internet');
