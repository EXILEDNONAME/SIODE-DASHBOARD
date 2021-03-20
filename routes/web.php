<?php

Auth::routes(['register' => false]);

Route::get('/', function () { return view('pages.frontend.index'); });
Route::get('/dashboard', function () { return view('layouts.default'); });
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/template', function () { return view('layouts.sample'); });

Route::get('dashboard/logout', 'Backend\System\DashboardController@logout')->name('dashboard.logout');

// LANGUAGE
Route::get('lang/{language}', 'LocalizationController@switch')->name('localization.switch');

// MANAGEMENT ACCESSES
Route::group([
  'as' => 'system.management.access.',
  'prefix' => 'dashboard/management/accesses',
  'namespace' => 'Backend\System\Management',
], function(){
  Route::get('datatables', 'AccessController@data')->name('datatables');
  Route::get('enable/{id}', 'AccessController@enable')->name('enable');
  Route::get('disable/{id}', 'AccessController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'AccessController@status')->name('status');
  Route::get('delete/{id}', 'AccessController@delete')->name('delete');
  Route::get('deleteall', 'AccessController@deleteall')->name('deleteall');
  Route::resource('/', 'AccessController')->parameters(['' => 'id']);
});
