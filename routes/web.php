<?php

Auth::routes(['register' => false, 'verify' => true]);

Route::get('/dashboard', function () { return view('layouts.default'); });
Route::get('/home', 'HomeController@index')->name('home');
Route::get('dashboard/file-manager', 'Backend\System\DashboardController@filemanager')->name('dashboard.file-manager');
Route::get('dashboard/logout', 'Backend\System\DashboardController@logout')->name('dashboard.logout');

// LANGUAGE
Route::get('lang/{language}', 'LocalizationController@switch')->name('localization.switch');

// SYSTEM
require __DIR__.'/backend/system/dummy.php';
require __DIR__.'/backend/system/management.php';

// JASAMARGA - MAINTENANCES
Route::group([
  'as' => 'main.jasamarga.maintenance.',
  'prefix' => 'dashboard/jasamarga/maintenances',
  'namespace' => 'Backend\Main\Jasamarga',
], function () {
  Route::get('/', 'MaintenanceController@index')->name('index')->middleware('jasamarga:admin');
  Route::get('/create', 'MaintenanceController@create')->name('create')->middleware('auth', 'verified', 'administrator');
  Route::post('/', 'MaintenanceController@store')->name('store')->middleware('auth');
  Route::get('{id}/edit', 'MaintenanceController@edit')->name('edit')->middleware('auth');
  Route::patch('{id}', 'MaintenanceController@update')->name('update')->middleware('auth');
  Route::get('{id}', 'MaintenanceController@show')->name('show')->middleware('auth');
  Route::delete('/{id}','MaintenanceController@destroy')->name('destroy')->middleware('auth');
  Route::get('enable/{id}', 'MaintenanceController@enable')->name('enable')->middleware('auth', 'administrator');
  Route::get('disable/{id}', 'MaintenanceController@disable')->name('disable')->middleware('auth');
  Route::get('status-done/{id}', 'MaintenanceController@status_done')->name('status-done')->middleware('auth');
  Route::get('status-pending/{id}', 'MaintenanceController@status_pending')->name('status-pending')->middleware('auth');
  Route::get('status/{id}/{slug}', 'MaintenanceController@status')->name('status')->middleware('auth');
  Route::get('delete/{id}', 'MaintenanceController@delete')->name('delete')->middleware('auth');
  Route::get('deleteall', 'MaintenanceController@deleteall')->name('deleteall')->middleware('auth');
});

// VMS - MAINTENANCES
Route::group([
  'as' => 'main.vms.maintenance.',
  'prefix' => 'dashboard/vms/maintenances',
  'namespace' => 'Backend\Main\VMS',
], function () {
  Route::get('/', 'MaintenanceController@index')->name('index');
  Route::post('/', 'MaintenanceController@store')->name('store');
  Route::get('{id}', 'MaintenanceController@show')->name('show');
  Route::patch('{id}', 'MaintenanceController@update')->name('update');
  Route::get('create', 'MaintenanceController@create')->name('create');
  Route::get('{id}/edit', 'MaintenanceController@edit')->name('edit');
  Route::delete('/{id}','MaintenanceController@destroy')->name('destroy');
  Route::get('enable/{id}', 'MaintenanceController@enable')->name('enable');
  Route::get('disable/{id}', 'MaintenanceController@disable')->name('disable');
  Route::get('status-done/{id}', 'MaintenanceController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'MaintenanceController@status_pending')->name('status-pending');
  Route::get('status/{id}/{slug}', 'MaintenanceController@status')->name('status');
  Route::get('delete/{id}', 'MaintenanceController@delete')->name('delete');
  Route::get('deleteall', 'MaintenanceController@deleteall')->name('deleteall');
});
