<?php

Auth::routes(['register' => false, 'verify' => true]);

Route::view('/', 'pages.frontend.index');
Route::view('/radio', 'pages.frontend.radio.index');
Route::get('/dashboard', function () { return view('layouts.default'); });
Route::get('/home', 'HomeController@index')->name('home');
Route::get('dashboard/file-manager', 'Backend\System\DashboardController@filemanager')->name('dashboard.file-manager');
Route::get('dashboard/logout', 'Backend\System\DashboardController@logout')->name('dashboard.logout');

// LANGUAGE
Route::get('lang/{language}', 'LocalizationController@switch')->name('localization.switch');

// SYSTEM
require __DIR__.'/backend/system/dummy.php';
require __DIR__.'/backend/system/management.php';

// MAIN
require __DIR__.'/backend/main/jasamarga.php';
require __DIR__.'/backend/main/vms.php';
