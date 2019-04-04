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

Route::get('/', 'HomeController@index')->name('index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth/HomeController@index')->name('home');

Route::get('/posts/detail/{id}', 'PostsController@detail')->name('posts_detail');

Route::get('/posts/{category}', 'PostsController@index')->name('posts_index');
Route::get('/popular', 'PopularController@index')->name('popular_index');
Auth::routes();

