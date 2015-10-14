<?php

Route::get('/', 'BlogController@index');

Route::get('sobre', 'BlogController@sobre');

Route::get('contato', 'BlogController@contato');

Route::get('admin', 'BlogAdminController@index');