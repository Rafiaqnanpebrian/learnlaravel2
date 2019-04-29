<?php

Route::get('/buku','PerpustakaanController@index');
Route::get('/buku/tambah','PerpustakaanController@tambah');
Route::post('/buku/action','PerpustakaanController@action');
Route::get('/buku/edit/{id}','PerpustakaanController@edit');
Route::post('/buku/update','PerpustakaanController@update');
Route::get('/buku/hapus/{id}','PerpustakaanController@hapus');