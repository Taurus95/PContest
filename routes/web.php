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


Route::group(['middleware' => ['web']], function () {
    //views
    Route::get('/', 'ViewsController@index')->name('index');
    Route::get('login', 'ViewsController@login')->name('login');
    Route::get('register', 'ViewsController@register')->name('register');
    //actions
    Route::post('register', 'MainController@registerNew')->name('registerNew');
    Route::post('login', 'MainController@logIn')->name('login');
    Route::post('changeLang', 'MainController@changeLang')->name('changeLang');
    Route::delete('logOut', 'MainController@logOut')->name('logOut');

});

Route::group(['middleware' => ['webAuth']], function () {
    //views
    Route::get('dashboard', 'ViewsController@dashboard')->name('dashboard');
    //actions

});
