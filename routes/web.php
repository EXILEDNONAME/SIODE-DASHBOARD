<?php

Auth::routes(['register' => false]);

Route::get('/', function () { return view('pages.frontend.index'); });
Route::get('/dashboard', function () { return view('layouts.default'); });
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard/style/menus', function () { return view('pages.backend.system.style.menu.index'); });

Route::get('dashboard/file-manager', 'Backend\System\DashboardController@filemanager')->name('dashboard.file-manager');
Route::get('dashboard/logout', 'Backend\System\DashboardController@logout')->name('dashboard.logout');

// LANGUAGE
Route::get('lang/{language}', 'LocalizationController@switch')->name('localization.switch');

// SYSTEM
require __DIR__.'/backend/system/dummy.php';
require __DIR__.'/backend/system/management.php';

// PERMISSIONS
Route::group([
  'as' => 'system.permission',
  'prefix' => 'dashboard/permissions',
  'namespace' => 'Backend\System',
], function(){
  Route::get('status-done/{id}', 'PermissionController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'PermissionController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'PermissionController@enable')->name('enable');
  Route::get('disable/{id}', 'PermissionController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'PermissionController@status')->name('status');
  Route::get('delete/{id}', 'PermissionController@delete')->name('delete');
  Route::get('deleteall', 'PermissionController@deleteall')->name('deleteall');
  Route::resource('/', 'PermissionController')->parameters(['' => 'id']);
});
