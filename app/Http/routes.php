<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('main');
});


Route::get('/register2', function () {
    return view('register');
});


Route::get('/user', function () {
    return view('homeUser');
});


Route::get('/admin', function () {
    return view('homeAdmin');
});

Route::get('/help', function () {
    return view('help');
});

Route::get('internship/{internship}', 'InternshipController@show');

Route::get('/internships', 'InternshipController@index');

Route::post('/admin', 'UserController@createAdmin');

Route::get('/admin/{user}', 'UserController@destroy');

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    //Route::get('/home', 'HomeController@index');
});
