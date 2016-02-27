<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//Front-end
Route::get('/', 'FrontController@index');
Route::get('q', 'FrontController@search');
Route::post('mail', 'MyMailsController@getMail');

Route::get('tavern', 'TavernController@tavern');
Route::get('tavern/{name}', 'TavernController@show');
Route::get('about', 'AboutController@about');
Route::get('work', 'WorkController@work');
Route::get('work/{name}', 'WorkController@show');
Route::get('post', 'PostController@post');
Route::get('post/{name}', 'PostController@show');
Route::get('home', 'HomeController@index');

//Categories
Route::get('category', 'FrontController@index');
Route::get('category/{name}', 'CategoryController@show');


//Administrative
//Homesite
Route::get('admin/home', 'HomeController@index');
//About
Route::resource('admin/about', 'AboutController');
//Category
Route::resource('admin/category' , 'CategoryController');
//Work
Route::resource('admin/work' , 'WorkController');
Route::get('statusw', 'WorkController@statusw');
//Post
Route::resource('admin/post', 'PostController');
Route::get('status', 'PostController@status');
//Tavern
Route::resource('admin/tavern', 'TavernController');
//Users
Route::resource('admin/user', 'UserController');
//Updates
Route::resource('admin/updates', 'UpdateController');
//Mails
Route::resource('admin/mail', 'MyMailsController');


Route::controllers([
	'admin' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



/*
Route::get('admin/about', 'AboutController@index');
Route::get('admin/about/add', 'AboutController@add');
Route::post('admin/about', 'AboutController@store');
Route::get('admin/about/{id}/edit', 'AboutController@edit');
**/
//Gera o crud automatico
//Route::resource('admin/about', 'AboutController');
