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

//Blog Frontend Routes
Route::get('/', 'PostController@allPosts');
Route::get('posts', 'PostController@allPosts');
Route::get('posts/author/{id}', 'PostController@postsByAuthor');
Route::get('posts/json', 'PostController@jsonFeed');
Route::get('post/{id}', 'PostController@singlePost');

//Admin Area Routes
Route::get('admin/view-posts', array('before' => 'auth|admin', 'uses' => 'AdminController@viewPosts'));

Route::get('admin/new-post', array('before' => 'auth|admin', 'uses' => 'AdminController@newPost'));

Route::get('admin/edit-post/{id}', array('before' => 'auth|admin', 'uses' => 'AdminController@editPost'));

Route::post('admin/add-post', array('before' => 'auth|admin', 'uses' => 'AdminController@addPost'));

Route::post('admin/update-post', array('before' => 'auth|admin', 'uses' => 'AdminController@updatePost'));

Route::get('admin/delete-post/{id}', array('before' => 'auth|admin', 'uses' => 'AdminController@deletePost'));

//User Login Routes
Route::get('login', 'AuthController@login');

Route::get('logout', 'AuthController@doLogout');

Route::post('do-login', 'AuthController@doLogin');

Route::get('account/create', 'AuthController@createAccount');

Route::post('account/add', 'AuthController@addAccount');

//Comments Routes
Route::post('comment/add', array('before' => 'auth', 'uses' => 'CommentController@addComment'));
