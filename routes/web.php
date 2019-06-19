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
    return view('site.index');
});

Route::get('/home', function () {
    return view('site.index');
});


Route::get('/service', function () {
    return view('site.service');
});

Route::get('/about', function () {
    return view('site.about');
});


Route::get('/training', function () {
    return view('site.training');
});




Route::get('lang/{locale}', 'HomeController@lang');

