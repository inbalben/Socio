<?php


Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/branch', 'BranchController@index');

Route::post('/branch', 'BranchController@store');

Route::get('/ourwork', 'FilesController@index');

Route::get('/ourwork/get/{branch_id}', 'FilesController@getFileList');


Route::get('/uploadFile', function () {
    return view('uploadFile');
});

Route::post('/files', 'FilesController@store');