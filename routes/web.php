<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@getIndex');

Route::get('/Amelia', function () {
    return view('amelia/index');
});

Route::get('/Christina', function () {
    return view('christina/index');
});

Route::get('/Daniel', function () {
    return view('daniel/index');
});

Route::get('/Luigi', function () {
    return view('luigi/index');
});
