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

Route::get('/admin/home', [
      'uses' => 'HomeController@index',
       'as'  => 'home'
]);

Route::get('/admin/post/create', [
     'uses' => 'PostsController@create',
     'as'   => 'post.create'
   ]);


Route::post('/admin/post/store', [
    'uses' => 'PostsController@store',
      'as' => 'post.store'
]);


Route::get('/category/create', [
      'uses' => 'CategoriesController@create',
      'as'   => 'category.create'
]);


Route::get('/categories' , [
      'uses' => 'CategoriesController@index',
       'as'  => 'categories'
]);


Route::post('/category/store', [
      'uses'  => 'CategoriesController@store',
       'as'   =>  'category.store'
]);
