<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\TodoController@index')->name('todolist');
Route::post('/addtodo', 'App\Http\Controllers\TodoController@store')->name('addtodo');
Route::get('/markcomplete/{id}', 'App\Http\Controllers\TodoController@markcomplete')->name('markcomplete');
Route::delete('/delete/{id}', 'App\Http\Controllers\TodoController@delete')->name('delete');

