<?php

// DUMMY - TABLE INVOICES
Route::group([
  'as' => 'system.dummy.table-invoices.',
  'prefix' => 'dashboard/dummy/table-invoices',
  'namespace' => 'Backend\System\Dummy',
], function(){
  Route::get('status-done/{id}', 'TableInvoiceController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'TableInvoiceController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'TableInvoiceController@enable')->name('enable');
  Route::get('disable/{id}', 'TableInvoiceController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'TableInvoiceController@status')->name('status');
  Route::get('delete/{id}', 'TableInvoiceController@delete')->name('delete');
  Route::get('deleteall', 'TableInvoiceController@deleteall')->name('deleteall');
  Route::resource('/', 'TableInvoiceController')->parameters(['' => 'id']);
});

// DUMMY - TABLE GENERALS
Route::group([
  'as' => 'system.dummy.table-generals.',
  'prefix' => 'dashboard/dummy/table-generals',
  'namespace' => 'Backend\System\Dummy',
], function(){
  Route::get('status-done/{id}', 'TableGeneralController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'TableGeneralController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'TableGeneralController@enable')->name('enable');
  Route::get('disable/{id}', 'TableGeneralController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'TableGeneralController@status')->name('status');
  Route::get('delete/{id}', 'TableGeneralController@delete')->name('delete');
  Route::get('deleteall', 'TableGeneralController@deleteall')->name('deleteall');
  Route::resource('/', 'TableGeneralController')->parameters(['' => 'id']);
});

// DUMMY - TABLE RELATIONS
Route::group([
  'as' => 'system.dummy.table-relations.',
  'prefix' => 'dashboard/dummy/table-relations',
  'namespace' => 'Backend\System\Dummy',
], function(){
  Route::get('status-done/{id}', 'TableRelationController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'TableRelationController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'TableRelationController@enable')->name('enable');
  Route::get('disable/{id}', 'TableRelationController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'TableRelationController@status')->name('status');
  Route::get('delete/{id}', 'TableRelationController@delete')->name('delete');
  Route::get('deleteall', 'TableRelationController@deleteall')->name('deleteall');
  Route::resource('/', 'TableRelationController')->parameters(['' => 'id']);
});

// DUMMY - TABLE REPORTS
Route::group([
  'as' => 'system.dummy.table-reports.',
  'prefix' => 'dashboard/dummy/table-reports',
  'namespace' => 'Backend\System\Dummy',
], function(){
  Route::get('status-done/{id}', 'TableReportController@status_done')->name('status-done');
  Route::get('status-pending/{id}', 'TableReportController@status_pending')->name('status-pending');
  Route::get('enable/{id}', 'TableReportController@enable')->name('enable');
  Route::get('disable/{id}', 'TableReportController@disable')->name('disable');
  Route::get('status/{id}/{slug}', 'TableReportController@status')->name('status');
  Route::get('delete/{id}', 'TableReportController@delete')->name('delete');
  Route::get('deleteall', 'TableReportController@deleteall')->name('deleteall');
  Route::resource('/', 'TableReportController')->parameters(['' => 'id']);
});
