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
  Route::get('lk', function () {
        return view('lk.community');
    });

   Route::get('/lk/predmets', function () {
        return view('lk.predmets');
    });
   Route::get('/lk/practics', function () {
        return view('lk.practics');
    });
   Route::get('/lk/achivment', function () {
        return view('lk.achivment');
    });
   Route::get('/lk/test', function () {
        return view('lk.test');
    });
