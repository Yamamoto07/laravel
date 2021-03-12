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

Route::get('/', function () {
    return view('welcome');
});
Route::get('food', 'App\Http\Controllers\FoodController@index');
Route::get('food/add', 'App\Http\Controllers\FoodController@add');
Route::post('food/add', 'App\Http\Controllers\FoodController@create');
Route::get('food/edit', 'App\Http\Controllers\FoodController@edit');
Route::post('food/edit', 'App\Http\Controllers\FoodController@update');
Route::get('food/delete', 'App\Http\Controllers\FoodController@delete')
    ->name('food_delete');
Route::post('food/delete', 'App\Http\Controllers\FoodController@remove')
    ->name('food_remove');
