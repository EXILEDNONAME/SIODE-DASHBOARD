<?php

// VMS - AREAS
Route::group([
  'as' => 'main.vms.area.',
  'prefix' => 'dashboard/vms/areas',
  'namespace' => 'Backend\Main\Vms',
], function () {
  Route::get('/', 'AreaController@index')->name('index')->middleware('accesses:["administrator-vms"]');
  Route::get('create', 'AreaController@create')->name('create')->middleware('accesses:["administrator-vms"]');
  Route::post('/', 'AreaController@store')->name('store')->middleware('accesses:["administrator-vms"]');
  Route::get('{id}/edit', 'AreaController@edit')->name('edit')->middleware('accesses:["administrator-vms"]');
  Route::patch('{id}', 'AreaController@update')->name('update')->middleware('accesses:["administrator-vms"]');
  Route::get('{id}', 'AreaController@show')->name('show')->middleware('accesses:["administrator-vms"]');
  Route::delete('/{id}','AreaController@destroy')->name('destroy')->middleware('accesses:["administrator-vms"]');
  Route::get('enable/{id}', 'AreaController@enable')->name('enable')->middleware('accesses:["administrator-vms"]');
  Route::get('disable/{id}', 'AreaController@disable')->name('disable')->middleware('accesses:["administrator-vms"]');
  Route::get('status-done/{id}', 'AreaController@status_done')->name('status-done')->middleware('accesses:["administrator-vms"]');
  Route::get('status-pending/{id}', 'AreaController@status_pending')->name('status-pending')->middleware('accesses:["administrator-vms"]');
  Route::get('status/{id}/{slug}', 'AreaController@status')->name('status')->middleware('accesses:["administrator-vms"]');
  Route::get('delete/{id}', 'AreaController@delete')->name('delete')->middleware('accesses:["administrator-vms"]');
  Route::get('deleteall', 'AreaController@deleteall')->name('deleteall')->middleware('accesses:["administrator-vms"]');
});

// VMS - DIRECTORIES
Route::group([
  'as' => 'main.vms.directory.',
  'prefix' => 'dashboard/vms/directories',
  'namespace' => 'Backend\Main\Vms',
], function () {
  Route::get('/', 'DirectoryController@index')->name('index')->middleware('accesses:["administrator-vms"]');
  Route::get('create', 'DirectoryController@create')->name('create')->middleware('accesses:["administrator-vms"]');
  Route::post('/', 'DirectoryController@store')->name('store')->middleware('accesses:["administrator-vms"]');
  Route::get('{id}/edit', 'DirectoryController@edit')->name('edit')->middleware('accesses:["administrator-vms"]');
  Route::patch('{id}', 'DirectoryController@update')->name('update')->middleware('accesses:["administrator-vms"]');
  Route::get('{id}', 'DirectoryController@show')->name('show')->middleware('accesses:["administrator-vms"]');
  Route::delete('/{id}','DirectoryController@destroy')->name('destroy')->middleware('accesses:["administrator-vms"]');
  Route::get('enable/{id}', 'DirectoryController@enable')->name('enable')->middleware('accesses:["administrator-vms"]');
  Route::get('disable/{id}', 'DirectoryController@disable')->name('disable')->middleware('accesses:["administrator-vms"]');
  Route::get('status-done/{id}', 'DirectoryController@status_done')->name('status-done')->middleware('accesses:["administrator-vms"]');
  Route::get('status-pending/{id}', 'DirectoryController@status_pending')->name('status-pending')->middleware('accesses:["administrator-vms"]');
  Route::get('status/{id}/{slug}', 'DirectoryController@status')->name('status')->middleware('accesses:["administrator-vms"]');
  Route::get('delete/{id}', 'DirectoryController@delete')->name('delete')->middleware('accesses:["administrator-vms"]');
  Route::get('deleteall', 'DirectoryController@deleteall')->name('deleteall')->middleware('accesses:["administrator-vms"]');
});

// VMS - MAINTENANCES
Route::group([
  'as' => 'main.vms.maintenance.',
  'prefix' => 'dashboard/vms/maintenances',
  'namespace' => 'Backend\Main\Vms',
], function () {
  Route::get('/', 'MaintenanceController@index')->name('index')->middleware('accesses:["administrator-vms"]');
  Route::post('/', 'MaintenanceController@store')->name('store')->middleware('accesses:["administrator-vms"]');
  Route::get('{id}', 'MaintenanceController@show')->name('show')->middleware('accesses:["administrator-vms"]');
  Route::patch('{id}', 'MaintenanceController@update')->name('update')->middleware('accesses:["administrator-vms"]');
  Route::get('create', 'MaintenanceController@create')->name('create')->middleware('accesses:["administrator-vms"]');
  Route::get('{id}/edit', 'MaintenanceController@edit')->name('edit')->middleware('accesses:["administrator-vms"]');
  Route::delete('/{id}','MaintenanceController@destroy')->name('destroy')->middleware('accesses:["administrator-vms"]');
  Route::get('enable/{id}', 'MaintenanceController@enable')->name('enable')->middleware('accesses:["administrator-vms"]');
  Route::get('disable/{id}', 'MaintenanceController@disable')->name('disable')->middleware('accesses:["administrator-vms"]');
  Route::get('status-done/{id}', 'MaintenanceController@status_done')->name('status-done')->middleware('accesses:["administrator-vms"]');
  Route::get('status-pending/{id}', 'MaintenanceController@status_pending')->name('status-pending')->middleware('accesses:["administrator-vms"]');
  Route::get('status/{id}/{slug}', 'MaintenanceController@status')->name('status')->middleware('accesses:["administrator-vms"]');
  Route::get('delete/{id}', 'MaintenanceController@delete')->name('delete')->middleware('accesses:["administrator-vms"]');
  Route::get('deleteall', 'MaintenanceController@deleteall')->name('deleteall')->middleware('accesses:["administrator-vms"]');
});

// VMS - MONITORINGS
Route::group([
  'as' => 'main.vms.monitoring.',
  'prefix' => 'dashboard/vms/monitorings',
  'namespace' => 'Backend\Main\Vms',
], function () {
  Route::get('/', 'MonitoringController@index')->name('index')->middleware('accesses:["administrator-vms"]');
  Route::get('create', 'MonitoringController@create')->name('create')->middleware('accesses:["administrator-vms"]');
  Route::post('/', 'MonitoringController@store')->name('store')->middleware('accesses:["administrator-vms"]');
  Route::get('{id}/edit', 'MonitoringController@edit')->name('edit')->middleware('accesses:["administrator-vms"]');
  Route::patch('{id}', 'MonitoringController@update')->name('update')->middleware('accesses:["administrator-vms"]');
  Route::get('{id}', 'MonitoringController@show')->name('show')->middleware('accesses:["administrator-vms"]');
  Route::delete('/{id}','MonitoringController@destroy')->name('destroy')->middleware('accesses:["administrator-vms"]');
  Route::get('enable/{id}', 'MonitoringController@enable')->name('enable')->middleware('accesses:["administrator-vms"]');
  Route::get('disable/{id}', 'MonitoringController@disable')->name('disable')->middleware('accesses:["administrator-vms"]');
  Route::get('status-done/{id}', 'MonitoringController@status_done')->name('status-done')->middleware('accesses:["administrator-vms"]');
  Route::get('status-pending/{id}', 'MonitoringController@status_pending')->name('status-pending')->middleware('accesses:["administrator-vms"]');
  Route::get('status/{id}/{slug}', 'MonitoringController@status')->name('status')->middleware('accesses:["administrator-vms"]');
  Route::get('delete/{id}', 'MonitoringController@delete')->name('delete')->middleware('accesses:["administrator-vms"]');
  Route::get('deleteall', 'MonitoringController@deleteall')->name('deleteall')->middleware('accesses:["administrator-vms"]');
});

// VMS - TYPES
Route::group([
  'as' => 'main.vms.type.',
  'prefix' => 'dashboard/vms/types',
  'namespace' => 'Backend\Main\Vms',
], function () {
  Route::get('/', 'TypeController@index')->name('index')->middleware('accesses:["administrator-vms"]');
  Route::get('create', 'TypeController@create')->name('create')->middleware('accesses:["administrator-vms"]');
  Route::post('/', 'TypeController@store')->name('store')->middleware('accesses:["administrator-vms"]');
  Route::get('{id}/edit', 'TypeController@edit')->name('edit')->middleware('accesses:["administrator-vms"]');
  Route::patch('{id}', 'TypeController@update')->name('update')->middleware('accesses:["administrator-vms"]');
  Route::get('{id}', 'TypeController@show')->name('show')->middleware('accesses:["administrator-vms"]');
  Route::delete('/{id}','TypeController@destroy')->name('destroy')->middleware('accesses:["administrator-vms"]');
  Route::get('enable/{id}', 'TypeController@enable')->name('enable')->middleware('accesses:["administrator-vms"]');
  Route::get('disable/{id}', 'TypeController@disable')->name('disable')->middleware('accesses:["administrator-vms"]');
  Route::get('status-done/{id}', 'TypeController@status_done')->name('status-done')->middleware('accesses:["administrator-vms"]');
  Route::get('status-pending/{id}', 'TypeController@status_pending')->name('status-pending')->middleware('accesses:["administrator-vms"]');
  Route::get('status/{id}/{slug}', 'TypeController@status')->name('status')->middleware('accesses:["administrator-vms"]');
  Route::get('delete/{id}', 'TypeController@delete')->name('delete')->middleware('accesses:["administrator-vms"]');
  Route::get('deleteall', 'TypeController@deleteall')->name('deleteall')->middleware('accesses:["administrator-vms"]');
});
