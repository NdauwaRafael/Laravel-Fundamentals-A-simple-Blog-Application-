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

Route::get('/posts/create', 'postController@create');
Route::get('/posts/show', 'postController@show');
/*
|--------------------------------------------------------------------------
|  ADDING A NEW POST
|--------------------------------------------------------------------------
*/
Route::post('/posts', 'postController@add');
/*
|--------------------------------------------------------------------------
|  DELETING A POST
|--------------------------------------------------------------------------
*/
Route::delete('/posts/delete', 'postController@delete');
