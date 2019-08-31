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
    Route::get('dashboard', 'ViewsController@dashboard')->name('dashboard');
    //actions
    Route::post('register', 'MainController@registerNew')->name('registerNew');
    Route::delete('logOut', 'MainController@logOut')->name('logOut');

});
