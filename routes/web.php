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

// JASAMARGA - DEVICES
Route::group([
  'as' => 'main.jasamarga.device.',
  'prefix' => 'dashboard/jasamarga/devices',
  'namespace' => 'Backend\Main\Jasamarga',
], function () {
  Route::get('/', 'DeviceController@index')->name('index')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('/create', 'DeviceController@create')->name('create')->middleware('accesses:["administrator-jasamarga"]');
  Route::post('/', 'DeviceController@store')->name('store')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('{id}/edit', 'DeviceController@edit')->name('edit')->middleware('accesses:["administrator-jasamarga"]');
  Route::patch('{id}', 'DeviceController@update')->name('update')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('{id}', 'DeviceController@show')->name('show')->middleware('accesses:["administrator-jasamarga"]');
  Route::delete('/{id}','DeviceController@destroy')->name('destroy')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('enable/{id}', 'DeviceController@enable')->name('enable')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('disable/{id}', 'DeviceController@disable')->name('disable')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('status-done/{id}', 'DeviceController@status_done')->name('status-done')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('status-pending/{id}', 'DeviceController@status_pending')->name('status-pending')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('status/{id}/{slug}', 'DeviceController@status')->name('status')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('delete/{id}', 'DeviceController@delete')->name('delete')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('deleteall', 'DeviceController@deleteall')->name('deleteall')->middleware('accesses:["administrator-jasamarga"]');
});

// JASAMARGA - MAINTENANCES
Route::group([
  'as' => 'main.jasamarga.maintenance.',
  'prefix' => 'dashboard/jasamarga/maintenances',
  'namespace' => 'Backend\Main\Jasamarga',
], function () {
  Route::get('/', 'MaintenanceController@index')->name('index')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('/create', 'MaintenanceController@create')->name('create')->middleware('accesses:["administrator-jasamarga"]');
  Route::post('/', 'MaintenanceController@store')->name('store')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('{id}/edit', 'MaintenanceController@edit')->name('edit')->middleware('accesses:["administrator-jasamarga"]');
  Route::patch('{id}', 'MaintenanceController@update')->name('update')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('{id}', 'MaintenanceController@show')->name('show')->middleware('accesses:["administrator-jasamarga"]');
  Route::delete('/{id}','MaintenanceController@destroy')->name('destroy')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('enable/{id}', 'MaintenanceController@enable')->name('enable')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('disable/{id}', 'MaintenanceController@disable')->name('disable')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('status-done/{id}', 'MaintenanceController@status_done')->name('status-done')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('status-pending/{id}', 'MaintenanceController@status_pending')->name('status-pending')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('status/{id}/{slug}', 'MaintenanceController@status')->name('status')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('delete/{id}', 'MaintenanceController@delete')->name('delete')->middleware('accesses:["administrator-jasamarga"]');
  Route::get('deleteall', 'MaintenanceController@deleteall')->name('deleteall')->middleware('accesses:["administrator-jasamarga"]');
});

// VMS - MAINTENANCES
Route::group([
  'as' => 'main.vms.maintenance.',
  'prefix' => 'dashboard/vms/maintenances',
  'namespace' => 'Backend\Main\Vms',
], function () {
  Route::get('/', 'MaintenanceController@index')->name('index')->middleware('access:administrator, vms');
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
