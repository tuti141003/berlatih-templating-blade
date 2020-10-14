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
