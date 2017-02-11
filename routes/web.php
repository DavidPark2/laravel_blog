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

Route::get('/', 'PostController@index');
Route::get('/posts/{post}', 'PostController@show');
Route::get('/posts', 'PostController@create');
Route::post('/posts', 'PostController@store');

Route::post('/posts/{post}/comment', "CommentController@store");

Route::get('/user', "UserController@create");
Route::post('/user', "UserController@store");