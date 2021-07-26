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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {

    Route::prefix('/school')->group(function () {
       Route::get('/', 'SchoolController@index');

        Route::any('/edit/{id}', 'SchoolController@edit');
        Route::any('/update/{id}', 'SchoolController@update');

        Route::any('/destroy-logo/{id}', 'SchoolController@destroyLogo');

        Route::any('/add', 'SchoolController@add');
        Route::post('/store', 'SchoolController@store');

        Route::any('/delete/{id}', 'SchoolController@destroy');
    });

    Route::prefix('/staff')->group(function () {
       Route::get('/', 'StaffController@index');

        Route::any('/edit/{id}', 'StaffController@edit');
        Route::any('/update/{id}', 'StaffController@update');;

        Route::any('/add', 'StaffController@add');
        Route::post('/store', 'StaffController@store');

        Route::any('/delete/{id}', 'StaffController@destroy');
    });

});