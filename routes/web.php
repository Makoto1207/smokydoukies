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


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/map', function () {
    return view('contents/map');
})->name('map');
//Route::get('/', 'MicropostsController@index');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);
    Route::group(['prefix' => 'users/{id}'], function () {
        
        //.favorite
        Route::post('favorite', 'FavoriteController@store')->name('user.favorite');
        Route::delete('unfavorite', 'FavoriteController@destroy')->name('user.unfavorite');
        Route::get('favoritings', 'UsersController@favoritings')->name('users.favoritings');
    });

    Route::resource('microposts', 'MicropostsController', ['only' => ['store', 'destroy']]);
});


//store.bladeにつなげるリンクを作成
Route::get('/restaurants', 'RestaurantsController@index')->name('store');
Route::get('/restaurants', 'RestaurantsController@search')->name('store');

//Route::get('/restaurants','RestaurantsController@getIndex');


//timeline用
Route::get('/timeline', 'MicropostsController@timeline')->name('timeline');
// Route::get('/timeline', 'MicropostsController@search')->name('search');
