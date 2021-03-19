<?php

Auth::routes(['register' => false]);

Route::get('/', function () { return view('pages.frontend.index'); });
Route::get('/dashboard', function () { return view('layouts.default'); });
Route::get('/home', 'HomeController@index')->name('home');
