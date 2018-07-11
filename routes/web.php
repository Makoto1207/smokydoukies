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

/* 未使用 */
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/map', function () {
    return view('contents/map');
})->name('map');
//Route::get('/', 'MicropostsController@index');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);
    Route::resource('microposts', 'MicropostsController', ['only' => ['store', 'destroy']]);
});




//timeline用
Route::get('/timeline', 'MicropostsController@timeline')->name('timeline');