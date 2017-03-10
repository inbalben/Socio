<?php


Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/branch', 'BranchController@index');

Route::post('/branch', 'BranchController@store');

Route::get('/permission', 'PermissionController@index');

Route::post('/permission', 'PermissionController@store');

Route::get('/ourwork', 'FilesController@index');

Route::post('/files', 'FilesController@store');

Route::get('/home', 'HomeController@index');

Route::get('/users', 'UsersController@index');

Route::post('/users_permissions', 'UsersController@storePermissions');

Route::get('/uploadFile', function () {
    return view('uploadFile');
});

Auth::routes();
