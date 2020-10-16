<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('welcome');
});

Route::get('/master', function () {
    return view('adminlte.master');
});

Route::get('/tables', function () {
    return view('items.tables');
});

Route::get('/data-tables', function () {
    return view('items.data-tables');
});

//Laravel CRUD

Route::get('/pertanyaan/create' , 'PertanyaanController@create');

Route::get('/pertanyaan' , 'PertanyaanController@index');

Route::post('/pertanyaan' , 'PertanyaanController@store');

Route::get('/pertanyaan/{pertanyaan_id}' , 'PertanyaanController@show');

Route::get('/pertanyaan/{pertanyaan_id}/edit' , 'PertanyaanController@edit');

Route::put('/pertanyaan/{pertanyaan_id}' , 'PertanyaanController@update');

Route::delete('/pertanyaan/{pertanyaan_id}' , 'PertanyaanController@destroy');



