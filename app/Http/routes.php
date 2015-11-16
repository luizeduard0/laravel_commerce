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

Route::get('/', 'WelcomeController@index');
Route::get('/exemplo', 'WelcomeController@exemplo');



Route::get('product/{id}',[
	'as'=>'product',
	'uses'=>'AdminProductsController@show',
]);

Route::group(['prefix'=>'admin'],function(){
	
	Route::get('categories',['as'=>'categories','uses'=>'AdminCategoriesController@index']);
	Route::get('category/create',['as'=>'category/create','uses'=>'AdminCategoriesController@index']);
	Route::get('category/edit',['as'=>'category/edit','uses'=>'AdminCategoriesController@index']);
	Route::get('category/destroy',['as'=>'category/destroy','uses'=>'AdminCategoriesController@index']);


	Route::get('product',['as'=>'products','uses'=>'AdminProductsController@index']);
	Route::get('product/create',['as'=>'product/create','uses'=>'AdminProductsController@index']);
	Route::get('product/edit',['as'=>'product/edit','uses'=>'AdminProductsController@index']);
	Route::get('product/destroy',['as'=>'product/destroy','uses'=>'AdminProductsController@index']);
});