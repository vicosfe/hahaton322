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

Route::get('/', 'Controller@index');


 Route::get('index', function () {
        return view('index');
    });
    Route::get('lk', 'AllController@lkcommunity');
    Route::get('/lk/predmets', 'AllController@lkpredmets');
    Route::get('/lk/predmets/html', 'AllController@html');
    Route::get('/lk/predmets/java', 'AllController@java');
    Route::get('/lk/practics', 'AllController@lkpractics');
    Route::get('/lk/achivment', 'AllController@lkachivment');
    Route::get('/lk/test', 'AllController@lktest');
    Route::get('form', 'AllController@form');
    Route::get('reg', 'AllController@reg');
Route::get('/lk/test2', 'AllController@lktest2');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
