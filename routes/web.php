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

Auth::routes();
//Fix home url
Route::get('/home', 'TodoController@redirect')->name('homefix');
//end fix


Route::get('/', [
    'uses' =>  'TodoController@index',
    'as' => 'todos.home'
]);

Route::post('/', [
    'uses' =>  'TodoController@store',
    'as' => 'todos.store'
]);

Route::get('/todos/{todo}-{slug}', [
    'uses' =>  'TodoController@show',
    'as' => 'todos.show'
]);