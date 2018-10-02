<?php

Route::view('/404-tenant', 'errors.404-tenant')->name('404.tenant');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
