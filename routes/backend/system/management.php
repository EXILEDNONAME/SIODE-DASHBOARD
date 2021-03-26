<?php

Route::group([
  'as' => 'system.management.access.',
  'prefix' => 'dashboard/management/accesses',
  'namespace' => 'Backend\System\Management',
], function () {
  Route::get('/', 'AccessController@index');
  Route::get('create', 'AccessController@create');
  Route::post('/', 'AccessController@store');
  Route::get('{id}/edit', 'AccessController@edit');
  Route::patch('{id}', 'AccessController@update');
  Route::get('{id}', 'AccessController@show');
  Route::delete('/{id}','AccessController@destroy');
  Route::get('enable/{id}', 'AccessController@enable')->name('enable');
  Route::get('disable/{id}', 'AccessController@disable')->name('disable');
  Route::get('status-done/{id}', 'AccessController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'AccessController@status_pending')->name('status-pending');
  Route::get('status/{id}/{slug}', 'AccessController@status')->name('status');
  Route::get('delete/{id}', 'AccessController@delete')->name('delete');
  Route::get('deleteall', 'AccessController@deleteall')->name('deleteall');
});

// MANAGEMENT ROLES
Route::group([
  'as' => 'system.management.roles.',
  'prefix' => 'dashboard/management/roles',
  'namespace' => 'Backend\System\Management',
], function(){
  Route::get('status-done/{id}', 'RoleController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'RoleController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'RoleController@enable')->name('enable');
  Route::get('disable/{id}', 'RoleController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'RoleController@status')->name('status');
  Route::get('delete/{id}', 'RoleController@delete')->name('delete');
  Route::get('deleteall', 'RoleController@deleteall')->name('deleteall');
  Route::resource('/', 'RoleController')->parameters(['' => 'id']);
});

// MANAGEMENT USERS
Route::group([
  'as' => 'system.management.users.',
  'prefix' => 'dashboard/management/users',
  'namespace' => 'Backend\System\Management',
], function(){
  Route::get('status-done/{id}', 'UserController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'UserController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'UserController@enable')->name('enable');
  Route::get('disable/{id}', 'UserController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'UserController@status')->name('status');
  Route::get('delete/{id}', 'UserController@delete')->name('delete');
  Route::get('deleteall', 'UserController@deleteall')->name('deleteall');
  Route::resource('/', 'UserController')->parameters(['' => 'id']);
});
