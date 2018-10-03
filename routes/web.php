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

Route::get('/','PagesController@index');


use App\Post;
Route::resource('/posts','PostsController');

Route::get('/index',function(){
	return view('posts.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


Route::post('update_dataset', ['as' => 'update_dataset', 'uses' => 'HomeController@update_dataset']);
Route::get('/explore', 'HomeController@explore')->name('explore');
Route::get('/logout', 'HomeController@logout')->name('logout');