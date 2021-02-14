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

Route::get('/index', 'App\Http\Controllers\AppController@index');
Route::post('/index', 'App\Http\Controllers\AppController@post');
Route::get('food', 'App\Http\Controllers\FoodController@index');
Route::get('food/find', 'App\Http\Controllers\FoodController@find');
Route::post('food/find', 'App\Http\Controllers\FoodController@search');
Route::get('food/add', 'App\Http\Controllers\FoodController@add');
Route::post('food/add', 'App\Http\Controllers\FoodController@create');
//food/addでpost送信を行ったとき、FoodControllerのpost関数でバリデーションを行う。
//Route::post('food/add', 'App\Http\Controllers\FoodController@post');
Route::get('food/edit', 'App\Http\Controllers\FoodController@edit')
    ->name('food_edit');
Route::post('food/edit', 'App\Http\Controllers\FoodController@update')
    ->name('food_update');
// food/editでpost送信を行ったとき、FoodControllerのpost関数でバリデーションを行う。
//Route::post('food/edit', 'App\Http\Controllers\FoodController@post');
Route::get('food/delete', 'App\Http\Controllers\FoodController@delete')
    ->name('food_delete');
Route::post('food/delete', 'App\Http\Controllers\FoodController@remove')
    ->name('food_delete');
Route::post('index', 'App\Http\Controllers\FormController@validate');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('index', 'App\Http\Controllers\AppController@index')
    ->middleware('auth');
Route::get('index/auth', 'App\Http\Controllers\AppController@getAuth');
Route::post('index/auth', 'App\Http\Controllers\AppController@postAuth');
// ゲストユーザーログイン
Route::get('index', 'App\Http\Controllers\Auth\LoginController@guestLogin')->name('login_guest');
// ゲストユーザーログアウト
Route::post('index', 'App\Http\Controllers\Auth\LoginController@guestLogout')->name('logout_guest');
