<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('test', 'TestController@getIndex');

Route::get('admin/view-posts', 'AdminController@viewPosts');

Route::get('admin/new-post', 'AdminController@newPost');

Route::get('admin/edit-post/{id}', 'AdminController@editPost');

Route::post('admin/add-post', 'AdminController@addPost');

Route::post('admin/update-post', 'AdminController@updatePost');

Route::get('admin/delete-post/{id}', 'AdminController@deletePost');