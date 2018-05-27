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

Route::auth();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/', 'HomeController@index');
/**
 * Route lists for categories
 */
Route::get('/categories', 'CategoryController@index');
Route::get('/categories/create', 'CategoryController@create');
Route::post('/categories', 'CategoryController@createSave');
Route::get('/categories/edit/{id}', 'CategoryController@edit');
Route::post('/categories/edit-save', 'CategoryController@editSave');
Route::get('/categories/destroy/{id}', 'CategoryController@destroy');

/**
 * Route lists for posts
 */
Route::get('/posts', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::post('/posts', 'PostController@createSave');
Route::get('/posts/edit/{id}', 'PostController@edit');
Route::post('/posts/edit-save', 'PostController@editSave');
Route::get('/posts/destroy/{id}', 'PostController@destroy');

