<?php

Route::get('/', 'BlogController@index');

Route::get('sobre', 'BlogController@sobre');

Route::get('contato', 'BlogController@contato');

Route::get('admin', ['as'=>'admin.index', 'uses'=>'BlogAdminController@index']);

//Route::get('admin/create', 'BlogAdminController@create');
Route::get('admin/create', ['as'=>'admin.create', 'uses'=>'BlogAdminController@create']);

Route::post('admin/store', ['as'=>'admin.store', 'uses'=>'BlogAdminController@store']);