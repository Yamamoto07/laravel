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

/*
 * 一覧、追加、更新、削除の画面へのRouteの設定。
 */
Route::get('food', 'App\Http\Controllers\FoodController@index');
Route::get('food/add', 'App\Http\Controllers\FoodController@add')
    ->name('food_add');
Route::post('food/add', 'App\Http\Controllers\FoodController@create')
    ->name('food_create');
Route::get('food/edit', 'App\Http\Controllers\FoodController@edit')
    ->name('food_edit');
Route::post('food/edit', 'App\Http\Controllers\FoodController@update')
    ->name('food_update');
Route::get('food/delete', 'App\Http\Controllers\FoodController@delete')
    ->name('food_delete');
Route::post('food/delete', 'App\Http\Controllers\FoodController@remove')
    ->name('food_remove');

/*
 * ログインしていない状態でアクセスできないように、Authを設定。
 */
Route::get('food', 'App\Http\Controllers\FoodController@index')
    ->middleware('auth');
Route::get('food/add', 'App\Http\Controllers\FoodController@add')
    ->middleware('auth')->name('food_add');
Route::get('food/edit', 'App\Http\Controllers\FoodController@edit')
    ->middleware('auth')->name('food_edit');
Route::get('food/delete', 'App\Http\Controllers\FoodController@delete')
    ->middleware('auth')->name('food_delete');

Auth::routes();
