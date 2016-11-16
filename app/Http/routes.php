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
    return view('index');
});
Route::get('/profile', function () {
    return view('pages.profile');
});
Route::get('/movement', function () {
    return view('movement');
});
Route::get('/news', function () {
    return view('pages.blog');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/profile2', 'HomeController@profile');
